<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Testing\Assert;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->path = storage_path() . '/app/data-kelas.xlsx';
        // dd(app_path());
        $this->reader = new Xlsx();
        $this->spreedsheet = $this->reader->load($this->path);
        $this->sheet = $this->spreedsheet->getActiveSheet();
    }

    public $path;
    public $reader;
    public $spreedsheet;
    public $sheet;

    public function index(Request $request)
    {

        $data = [];
        $compare = [];

        $row = 2;

        while (true) {
            if (
                $this->sheet->getCell("B{$row}")->getValue() && $this->sheet->getCell("B{$row}")->getValue() != "Total"
                && !Assert::assertNotNull($this->sheet->getCell("B{$row}")->getValue())
            ) {

                if ($this->sheet->getCell("E{$row}")->getValue() === 'ARTIFICIAL INTELLIGENCE') {
                    $data['artificial_inteligence'][] = $this->getData($row);
                    $isTrue =  $this->sheet->getCell("E{$row}")->getValue() === 'ARTIFICIAL INTELLIGENCE';
                    $compare[] = $this->sheet->getCell("E{$row}")->getValue() . ' || ARTIFICIAL INTELLIGENCE : ' . $isTrue;
                } else if ($this->sheet->getCell("E{$row}")->getValue() === 'BAHASA INGGRIS II') {
                    $data['bahasa_ingris_2'][] = $this->getData($row);
                    $isTrue =  $this->sheet->getCell("E{$row}")->getValue() === 'BAHASA INGGRIS II';
                    $compare[] = $this->sheet->getCell("E{$row}")->getValue() . ' || BAHASA INGGRIS II : ' . $isTrue;
                } else if ($this->sheet->getCell("E{$row}")->getValue() === 'COMPUTER GRAPHIC') {
                    $data['computer_graphic'][] = $this->getData($row);
                    $isTrue =  $this->sheet->getCell("E{$row}")->getValue() === 'COMPUTER GRAPHIC';
                    $compare[] = $this->sheet->getCell("E{$row}")->getValue() . ' || COMPUTER GRAPHIC : ' . $isTrue;
                } else if ($this->sheet->getCell("E{$row}")->getValue() === 'JARINGAN KOMPUTER') {
                    $data['jaringan_komputer'][] = $this->getData($row);
                    $isTrue =  $this->sheet->getCell("E{$row}")->getValue() === 'JARINGAN KOMPUTER';
                    $compare[] = $this->sheet->getCell("E{$row}")->getValue() . ' || JARINGAN KOMPUTER : ' . $isTrue;
                } else if ($this->sheet->getCell("E{$row}")->getValue() === 'PEMROGRAMAN WEB') {
                    $data['pemrograman_web'][] = $this->getData($row);
                    $isTrue =  $this->sheet->getCell("E{$row}")->getValue() === 'PEMROGRAMAN WEB';
                    $compare[] = $this->sheet->getCell("E{$row}")->getValue() . ' || PEMROGRAMAN WEB : ' . $isTrue;
                } else if ($this->sheet->getCell("E{$row}")->getValue() === 'PRAKTIKUM GRAFIKA KOMPUTER') {
                    $data['praktikum_grafika_komputer'][] = $this->getData($row);
                    $isTrue =  $this->sheet->getCell("E{$row}")->getValue() === 'PRAKTIKUM GRAFIKA KOMPUTER';
                    $compare[] = $this->sheet->getCell("E{$row}")->getValue() . ' || PRAKTIKUM GRAFIKA KOMPUTER : ' . $isTrue;
                } else if ($this->sheet->getCell("E{$row}")->getValue() === 'PRAKTIKUM JARINGAN KOMPUTER') {
                    $data['praktikum_jaringan_komputer'][] = $this->getData($row);
                    $isTrue =  $this->sheet->getCell("E{$row}")->getValue() === 'PRAKTIKUM JARINGAN KOMPUTER';
                    $compare[] = $this->sheet->getCell("E{$row}")->getValue() . ' || PRAKTIKUM JARINGAN KOMPUTER : ' . $isTrue;
                } else if ($this->sheet->getCell("E{$row}")->getValue() === 'PRAKTIKUM PEMROGRAMAN WEB') {
                    $data['praktikum_pemrograman_web'][] = $this->getData($row);
                    $isTrue =  $this->sheet->getCell("E{$row}")->getValue() === 'PRAKTIKUM PEMROGRAMAN WEB';
                    $compare[] = $this->sheet->getCell("E{$row}")->getValue() . ' || PRAKTIKUM PEMROGRAMAN WEB : ' . $isTrue;
                } else if ($this->sheet->getCell("E{$row}")->getValue() === 'PRAKTIKUM REKAYASA PERANGKAT LUNAK') {
                    $data['praktikum_rekayasa_perangkat_lunak'][] = $this->getData($row);
                    $isTrue =  $this->sheet->getCell("E{$row}")->getValue() === 'PRAKTIKUM REKAYASA PERANGKAT LUNAK';
                    $compare[] = $this->sheet->getCell("E{$row}")->getValue() . ' || PRAKTIKUM REKAYASA PERANGKAT LUNAK : ' . $isTrue;
                } else if ($this->sheet->getCell("E{$row}")->getValue() === 'REKAYASA PERANGKAT LUNAK') {
                    $data['rekayasa_perangkat_lunak'][] = $this->getData($row);
                    $isTrue =  $this->sheet->getCell("E{$row}")->getValue() === 'REKAYASA PERANGKAT LUNAK';
                    $compare[] = $this->sheet->getCell("E{$row}")->getValue() . ' || REKAYASA PERANGKAT LUNAK : ' . $isTrue;
                } else {
                    $data['other'][] = $this->getData($row);
                }

                $row++;
            } else
                break;
        }

        return view('index', ['data' => $data]);

        // return response()->json([
        //     'datas' => count($data),
        //     'data' => $data,
        // ]);
    }

    public function getData(int $id)
    {
        $data = [
            'id' => 'aster' . $id,
            'hari' => $this->sheet->getCell("B{$id}")->getValue(),
            'pukul' => $this->sheet->getCell("C{$id}")->getValue(),
            'kode' => $this->sheet->getCell("D{$id}")->getValue(),
            'mata_kuliah' => $this->sheet->getCell("E{$id}")->getValue(),
            'dosen' => $this->sheet->getCell("F{$id}")->getValue(),
            'ruang' => $this->sheet->getCell("G{$id}")->getValue(),
            'kelas' => $this->sheet->getCell("H{$id}")->getValue(),
            'jumlah_kelas' => $this->sheet->getCell("I{$id}")->getValue(),
            'angkatan' => $this->sheet->getCell("J{$id}")->getValue(),
            'link_grupe' => $this->sheet->getCell("K{$id}")->getValue(),
        ];

        return $data;
    }

    public function sendMessage(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'phone' => 'required'
        ]);

        Mail::send('emails.ContactAster', ['request' => $request], function ($message) {
            $message->to('prastyopratama01@gmail.com', 'Contact')
                ->subject('Aster Contact');
        });

        return redirect('/');
    }
}
