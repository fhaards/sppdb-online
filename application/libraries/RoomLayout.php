<?php
class RoomLayout
{
    private $maxPerson;
    private function getEmptySeatPlaceholder()
    {
        return [
            'kd_peserta' => 'empty_user',
            'nm_lengkap' => NULL,
            'photo' => 'image.svg'
        ];
    }

    public function roomFormatter($personData)
    {
        $seatPlaceholders = array_fill(0, $this->maxPerson, $this->getEmptySeatPlaceholder());
        return $personData + $seatPlaceholders;
        // var_dump($data,count($data));
        // exit;
    }


    public function init($maxPerson)
    {
        $this->maxPerson = intval($maxPerson);
    }
}
