<?php
use App\Models\bukutamu;
use App\Models\datapegawai;
use App\Models\datakepalakeluarga;

function totalpengunjung()
{
    return bukutamu::count();
}

function totalpegawai()
{
    return datapegawai::count();
}

function totalkepalakeluarga()
{
    return datakepalakeluarga::count();
}