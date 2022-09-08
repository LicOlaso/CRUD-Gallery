<?php
function Connect($config = array())
{
    $conn = mysqli_connect($config['host'],$config['username'],$config['password'], $config['database']);
    return ($conn);
}

function Excecute($sql, $conn)
{
    $return = mysqli_query($conn, $sql);
    return ($return);
}
function ExcecuteQuery($sql, $conn)
{
    $result = mysqli_query($conn,$sql);
    if($row = mysqli_fetch_array($result, MYSQLI_BOTH))
    {
        do
        {
            $data[] = $row;
        }
        while($row = mysqli_fetch_array($result, MYSQLI_BOTH));
    }
    else
    {
        $data=null;
    }
    mysqli_free_result($result);
    return($data);
}
function Close($conn)
{
    mysqli_close($conn);
    unset ($conn);
}