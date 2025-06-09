<?php

require_once "Repository.php";
require_once __DIR__."/../models/Plane.php";

class PlaneRepository extends Repository
{
    public function getPlane(int $id): ?Plane
    {
            $stmt = $this->database->connect()->prepare("SELECT * FROM planes WHERE id=:id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            $plane = $stmt->fetch(PDO::FETCH_ASSOC);

            if(!$plane){
                return null;
            }
            return new plane($plane['marka'],$plane['cena'],$plane['zastosowanie'],$plane['rocznik'],$plane['model'],$plane['images']);

    }

    public function addPlane(Plane $plane): void
    {
        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('INSERT INTO planes (marka,cena,zastosowanie,rocznik,model,images,created_at,created_by) 
        VALUES (?,?,?,?,?,?,?,?)'
        );
        $created_by = 1;
        $stmt->execute([
            $plane->getMarka(),
            $plane->getCena(),
            $plane->getZastosowanie(),
            $plane->getRocznik(),
            $plane->getModel(),
            $plane->getImage(),
            $date->format('Y-m-d'),
            $created_by
        ]);



    }
    public function getPlanes() :array
    {
        $result = [];
        $stmt = $this->database->connect()->query('SELECT * FROM planes');
        $stmt->execute();
        $planes = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($planes as $plane){
            $result[] = new plane($plane['marka'],$plane['cena'],$plane['zastosowanie'],$plane['rocznik'],$plane['model'],$plane['images']
            );
        };
        return $result;
    }
}