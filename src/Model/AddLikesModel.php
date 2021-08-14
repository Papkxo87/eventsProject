<?php

namespace App\Model;

use W1020\Table as ORMTable;

class AddLikesModel extends ORMTable
{

    /**
     * @param string|int $likesId
     * @return array <int, array>
     * @throws \Exception
     */
    public function getEventsLikes(string|int $likesId): array
    {
        $sql = <<<SQL
SELECT
    `likes`.events_id,
    `likes`.users_id
FROM
    `likes`,
    `events`,
    `users`
WHERE
    `events`.id = `likes`.events_id AND `users`.id = `likes`.users_id = $likesId
SQL;

        return $this->query($sql);
    }

    public function addLikes(string|int $events_id, string|int $users_id): void
    {
        $sql = "INSERT INTO `likes`(`events_id`, `users_id`) VALUES ($events_id, $users_id)";
        $this->runSQL($sql);
    }
}
