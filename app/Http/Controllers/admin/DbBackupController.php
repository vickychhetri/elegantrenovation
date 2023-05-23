<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\DbDumper\Compressors\GzipCompressor;
use Spatie\DbDumper\Databases\MySql;

class DbBackupController extends Controller
{
    public function index(){
        return view('admin.database');
    }


    public function createDownload()
    {
        $basePath = url();
        $dumpCommand = MySql::create()
            ->setDbName(config('database.connections.mysql.database'))
            ->setUserName(config('database.connections.mysql.username'))
            ->setPassword(config('database.connections.mysql.password'))
            ->setHost(config('database.connections.mysql.host'))
            ->useCompressor(new GzipCompressor()); // or `new Bzip2Compressor()`

        $filename='db'.date('m-d-Y_hia').".sql.gz";
        $path = Storage::disk('dbbackup')->path($filename);
        // Dump the database to a file.
        $dumpCommand->dumpToFile($path);
//        Storage::disk('public')->put('/dbbackup/'.$filename, file_get_contents($path), 'public');
//        File::delete($path);
        return response()->file($path);


    }
}
