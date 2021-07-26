<?php
include '../model/soldier.php';

class main{
    function parseJson(){
        $contents = file_get_contents('../json/config.army.model.json');
        $initialData = json_decode($contents, true);
        //    $redis = new Redis();
        //    $redis->connect("127.0.0.1");
        $arr = array();
        foreach ($initialData as $key => $value){
            $soldier = new soldierClass($value["id"],$value["Rarity"],$value["Quality"],$value["UnlockArena"],$value["CombatPoints"],$value["Cvc"]);
            array_push($arr,$soldier);
        }
        try {
            file_put_contents("../json/config.json", json_encode($arr));
        }catch (Exception $e){
            echo $e->getMessage();
        }
    }

    /**
     * 获取该稀有度cvc合法且已解锁的所有士兵
     * @param $rarity
     * @param $quality
     * @param $cvc
     * @return array
     */
    function unlockSoldiers($rarity,$quality,$cvc): array
    {
        $data = json_decode(file_get_contents('../json/config.json'),true);
        $arr = array();
        foreach ($data as $key => $value){
            //print_r($value);
            if ($value["unlockArena"]>0){
                //print_r($value);
                if ($value["cvc"] <= $cvc && $value["rarity"] == $rarity && $value["quality"] == $quality){
                    //print_r($value);
                    array_push($arr,$value);
                }
            }
        }
        try {
            if (!empty($arr)){
                return $arr;
            }else{
                $error = '没有士兵';
                throw new myException($error);
            }
        }catch (Exception $e){
            echo $e->getMessage();
        }

    }

    /**
     * 输入cvc获取所有合法的士兵
     * @param $cvc
     * @return array
     */
    function getLegal($cvc): array
    {
        $data = json_decode(file_get_contents('../json/config.json'),true);
        $arr = array();
        foreach ($data as $key => $value){
            if ($value["cvc"] <= $cvc){
                //print_r($value);
                array_push($arr,$value);
            }
        }
        return $arr;
        //print_r($arr);
    }

    /**
     * 输入士兵id获取稀有度
     * @param $id
     * @return mixed
     */
    function getRarity($id){
        $data = json_decode(file_get_contents('../json/config.json'),true);
        //$arr = array();
        foreach ($data as $key => $value){
            //print_r($value);
            if ($value['id'] == $id){
                return $result = $value['rarity'];
                //array_push($arr,$value['rarity']);
            }
            //print_r($arr);
        }

    }

    /**
     * 输入士兵id获取战力
     * @param $id
     * @return int|mixed
     */
    function getCombatPoints($id){
        $data = json_decode(file_get_contents('../json/config.json'),true);
        foreach ($data as $key => $value){
            if ($key == $id){
                print_r($value);
                return $result = $value["combatPoints"];
            }
            return -1;
        }
    }


    /**
     * 获取每个阶段解锁相应士兵的json数据
     * @return array
     */
    function getJsonByQuality(): array
    {
        $data = json_decode(file_get_contents('../json/config.json'),true);
        $arr = array();
        foreach ($data as $key => $value){
            if ($value["UnlockArena"]>0){
                array_push($arr,$value);
                //array_column($arr,NULL,'Quality');
            }
        }
        return $arr;
    }
}