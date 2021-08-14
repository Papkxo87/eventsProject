<?php

namespace App\Model;

use W1020\Table as ORMTable;

class ShowEventsModel extends ORMTable
{

    /**
     * @param string|int $eventsId
     * @return array <int, array>
     * @throws \Exception
     */
    public function getEventsComments(string|int $eventsId): array
    {
        $sql = <<<SQL
SELECT
    `events`.id,
    `comments`.`text`,
    `users`.`name`
FROM
    `comments`,
    `events`,
    `users`
WHERE
    `comments`.events_id = `events`.id AND `users`.id = `comments`.users_id AND `events`.id = $eventsId
SQL;

        return $this->query($sql);
    }

    public function addComment(string $text, string|int $events_id, string|int $users_id): void
    {
        $sql = "INSERT INTO `comments`(`text`, `events_id`, `users_id`) VALUES ('$text', $events_id, $users_id)";
        $this->runSQL($sql);
    }

    public function countLike($events_id)
    {
        return $this->query("SELECT COUNT(*) as c FROM `likes` WHERE events_id=" . $events_id)[0]["c"];

    }

    public function chekLike($events_id, $users_id)
    {
        return $this->query(
            "SELECT COUNT(*) as c FROM `likes` WHERE events_id=$events_id and users_id=$users_id"
        )[0]["c"];

    }
}
