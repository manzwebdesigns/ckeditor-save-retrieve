<?php

class Message
{
    /**
     * Creates a new record
     *
     * @param $message
     * @param PDO $pdo
     * @return bool
     */
	public function createMessage($message, PDO $pdo)
	{
        /* Table:  messages
         * Fields: id      (INT, primary key, auto-increment)
         *         message (TEXT)
         */
        $sql = <<<EOT
INSERT INTO messages (message) VALUES (:message)
EOT;

        $stmt = $pdo->prepare($sql);

		return $stmt->execute(array(':message' => $message));
	}

    /**
     * Returns all the records
     *
     * @param PDO $pdo PDO connection to use
     * @return array
     */
    public function fetchMessages(PDO $pdo)
    {
        $sql = <<<EOT
SELECT *
FROM messages m
ORDER BY id DESC
EOT;

        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}