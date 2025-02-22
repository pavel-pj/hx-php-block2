<?php

namespace Testeru\News2\Tree;

/*
function recursionChanger(array $node,string $oldClass,string $newClass){

    if (array_key_exists('name',$node)){
         echo "Ввошли в ".$node['name']. "\n";}
    else  if (array_key_exists('type',$node)) {
        echo "Ввошли в ".$node['type']. "\n";
    }

    $result = array_map(function ($item) use ($oldClass,$newClass){

        if ( $item['type'] == 'tag-internal' ) {


           if (array_key_exists('name',$item)){
                    echo "Входим в ".$item['name']. "\n";}
                else  if (array_key_exists('type',$item)) {
                    echo "Входим в ".$item['type']. "\n";}


            recursionChanger($item  ,$oldClass,$newClass);

            print_r($item);



      }



        if (array_key_exists('name',$item)){
            echo "Возврашщаем ".$item['name']. "\n----------\n";
        }
        else  if (array_key_exists('type',$item)) {
            echo "Возвращаем ".$item['type']. "\n---------\n";
        }
        if (array_key_exists('className',$item)){
            echo "ЕСТЬ КЛАСС\n----". $item['className'] ."\n";
            if ($item['className'] == $oldClass) {
                echo "hexlet-community\n";
                $item['className'] = 'BABABAB';
                // $item['name'] = 'bububububuaesfasfasefasef';
                echo "УКУКУКУКУККУ---------\n ";// . $item['className'] . "\n---------\n";


            }
        }

        $arr = [];
        if (array_key_exists('name',$item)){
            $arr['name'] = $item['name'];
        }
        if(array_key_exists('className',$item)){
            $arr['className'] = 'FFFFFFFFFFF';
            echo "НОВЫЙ КЛАСС  ".$arr['className'] ."\n";
         }
        if (array_key_exists('children',$item)){
            $arr['children'] = $item['children'];
        }
        if (array_key_exists('type',$item)){
            $arr['type'] = $item['type']."fsefseff";
        }

        //print_r($arr);//exit;

        return $arr;

    },$node['children']);


    //print_r($result);
   // exit;



    return $result;


}

function changeClass( array $node,string $oldClass,string $newClass){

    $result = $node;
    $result ['children'] =  recursionChanger($node,$oldClass,$newClass);

    return $result;
}
*/
function nest2() {
    echo "HOHO";
}
function changeClass(array $node,string $oldClass,string $newClass){

    $result = array_map(function ($item) use ($oldClass,$newClass){

        if ( $item['type'] == 'tag-internal' ) {

            $oneChild = changeClass($item  ,$oldClass,$newClass);
            if (array_key_exists('className',$oneChild)){
                if ($oneChild['className'] == $oldClass) {
                    $oneChild['className'] = $newClass;
                }

            }
            return $oneChild;


        }

     return $item;
    },$node['children']);



    $node['children'] =$result;
    return $node;


}