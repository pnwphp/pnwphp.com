<?php
/**
 * Script to parse the csv file and regenerate the jobs for pnwphp.php
 *
 * Run this at the command line. You'll need to paste the output in the pnwphp.php
 * file yourself. Replace the output of the entire jobs array.
 *
 * @package PNWPHP
 * @subpackage Tools
 * @author awoods
 */
class JobParser
{
    protected $filename = null;

    function __construct( $filename = FALSE )
    {
        if ( ! $filename ) {
            error_log( 'Whoops! You forgot to specify the filename.' );
            exit;
        }

        $this->filename = $filename;
    }

    function parse()
    {
        $file_handle = fopen( $this->filename, "r");

        $field = array(
            'timestamp' => 0,
            'company_name' => 1,
            'company_url' => 2,
            'contact_name' => 3,
            'contact_email' => 4,
            'title' => 5,
            'location' => 6,
            'description' => 7,
            'url' => 8
        );


        while ( ! feof( $file_handle ) ) {

            $rec = fgetcsv( $file_handle, 1024 );

            $search = array( ' ', '  ', '   ', '    ', "\t");
            $job_id = strtolower( $rec[ $field['company_name'] ] . '--' . $rec[ $field['title'] ] );
            $job_id =  str_replace ( $search, '-' ,  $job_id );


            $output =  '';
            $output .= '"' . $job_id . '" => [';
            $output .= PHP_EOL;
            $output .= "\t" . '"company_name" => "' . $rec[ $field['company_name'] ] . '",' . PHP_EOL;
            $output .= "\t" . '"company_url" => "' . $rec[ $field['company_url'] ] . '",' . PHP_EOL;
            $output .= "\t" . '"contact_name" => "' . $rec[ $field['contact_name'] ] . '",' . PHP_EOL;
            $output .= "\t" . '"contact_email" => "' . $rec[ $field['contact_email'] ] . '",' . PHP_EOL;
            $output .= "\t" . '"title" => "' . $rec[ $field['title'] ] . '",' . PHP_EOL;
            $output .= "\t" . '"location" => "' . $rec[ $field['location'] ] . '",' . PHP_EOL;
            $output .= "\t" . '"description" => "' . $rec[ $field['description'] ] . '",' . PHP_EOL;
            $output .= "\t" . '"url" => "' . $rec[ $field['url'] ] . '",' . PHP_EOL;
            $output .= PHP_EOL;
            $output .= '],';
            $output .= PHP_EOL;

            echo $output;
        }

        fclose( $file_handle );
    }

}

$jobParser = new JobParser( 'pnwphp-job-posting-board--responses.csv' );
$jobParser->parse();


