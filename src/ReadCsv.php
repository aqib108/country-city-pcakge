<?php
namespace aqib08\LocationMap;

class ReadCsv
{
  public static function read($fileName, $delimiter = ",", $enclosure = "\"", $escape = "")
  {
    $path = 'packages/aqib08/LocationMap/csv/' . $fileName;
    $csv = fopen($path, 'r');
    $data = [];
    $flag=  0;
    if ($csv) {
      while (($row = fgetcsv($csv)) !== false) {
        $flag++;
        if($flag==1){
          $header = $row;
          continue;
        }
        unset($row[0]);
        unset($header[0]);
        $record = array_combine($header, $row);
        $record['created_at'] = now();
        $record['updated_at'] = now();
        $data[] = $record;
      }
      fclose($csv);

      return $data;
    }
  }
}