<?php


class Parser
{
    public $parseFilename;
    public $undecodedData;
    public $decdedData;

    public function parseData(){
        $this->undecodedData = file_get_contents($this->parseFilename);
        return $this->undecodedData;
    }

    public function decodeData(){
        $this->decdedData = json_decode($this->parseData(), true);
        return $this->decdedData;
    }
}
