<?php

namespace Irwing\Movies\Models;


class UpdateData
{

    public function update($id, $newTitle, $newDirector, $newActor)
    {
            $objectConect = new Connect();
            $objectConect->connectar();
            $updateQuery = "UPDATE tb_movies 
                            SET Title='$newTitle', Director='$newDirector', Actor='$newActor' 
                            WHERE movieID = '$id'";
            $updateStmt = $objectConect->getConnection()->prepare($updateQuery);
            $updateStmt->execute();
    }
}