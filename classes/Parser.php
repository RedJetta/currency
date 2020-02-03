<?php


class Parser
{
    private $parseFilename;
    private $undecodedData;

    /**
     * Parser constructor.
     * @param $parseFilename
     */
    public function __construct($parseFilename)
    {
        $this->parseFilename = $parseFilename;
    }

    /**
     * @param bool $decode
     * @return false|string
     */
    public function parseData($decode = false){
        $this->undecodedData = file_get_contents($this->parseFilename);

        if ($decode) {
            return $this->decodeData($this->undecodedData);
        }

        return $this->undecodedData;
    }

    private function decodeData($data){
        return json_decode($data, true);
    }

    /**
     * @return mixed
     */
    public function getUndecodedData()
    {
        return $this->undecodedData;
    }
}
