<?php

namespace Haritsyp\Shipper\Helpers;

interface Status
{
    const SHIPPER_STATUS = [
        0 => [
            'code' => '1000',
            'status' => 'Paket sedang dipersiapkan',
            'description' => 'Paket sedang dipersiapkan',
            'flag' => 'Ready to Ship',
        ],
        1 => [
            'code' => '1010',
            'status' => 'Tunggu Penjemputan',
            'description' => 'Menunggu Penjemputan oleh [driver_name]',
            'flag' => 'Ready to Ship',
        ],
        2 => [
            'code' => '1020',
            'status' => 'Sedang Dijemput',
            'description' => 'Paket sedang dijemput driver [driver_name]',
            'flag' => 'Ready to Ship',
        ],
        3 => [
            'code' => '1030',
            'status' => 'Proses Penjemputan',
            'description' => 'Paket dalam proses penjemputan oleh driver [driver_name]',
            'flag' => 'Ready to Ship',
        ],
        4 => [
            'code' => '1040',
            'status' => 'Paket Siap Dikirim',
            'description' => 'Paket sudah siap dikirim dari [Store Public Name]',
            'flag' => 'Shipped',
        ],
        5 => [
            'code' => '1041',
            'status' => 'Pengajuan Penjemputan ke Hub',
            'description' => 'Penjemputan sudah diajukan ke Hub [Hub Public Name]',
            'flag' => 'Shipped',
        ],
        6 => [
            'code' => '1042',
            'status' => 'Penjemputan Dikonfirmasi Hub',
            'description' => 'Penjemputan sudah dikonfirmasi oleh Hub [Hub Public Name]',
            'flag' => 'Shipped',
        ],
        7 => [
            'code' => '1043',
            'status' => 'Paket Dijemput Driver Hub',
            'description' => 'Paket dijemput oleh driver Hub [Hub Public Name]',
            'flag' => 'Shipped',
        ],
        8 => [
            'code' => '1044',
            'status' => 'Paket Bersama Driver Hub',
            'description' => 'Paket dibawa oleh driver Hub [Hub Public Name]',
            'flag' => 'Shipped',
        ],
        9 => [
            'code' => '1050',
            'status' => 'Sampai di HUB',
            'description' => 'Paket diterima hub [hub_location]',
            'flag' => 'Shipped',
        ],
        10 => [
            'code' => '1060',
            'status' => 'Sortir Barang',
            'description' => 'Paket Menuju Gudang Sorting [warehouse_location]',
            'flag' => 'Shipped',
        ],
        11 => [
            'code' => '1070',
            'status' => 'Paket Diterima di Hub',
            'description' => 'Paket sudah diterima di Hub [Hub Public Name]',
            'flag' => 'Shipped',
        ],
        12 => [
            'code' => '1080',
            'status' => 'Paket Diproses di Hub',
            'description' => 'Paket sedang diproses di Hub [Hub Public Name]',
            'flag' => 'Shipped',
        ],
        13 => [
            'code' => '1090',
            'status' => 'Paket Siap Dikirim Dari Hub',
            'description' => 'Paket sudah siap dikirim dari Hub [Hub Public Name]',
            'flag' => 'Shipped',
        ],
        14 => [
            'code' => '1091',
            'status' => 'Pengajuan Penjemputan ke Sorting Hub',
            'description' => 'Penjemputan sudah diajukan ke SHub [Public Name]',
            'flag' => 'Shipped',
        ],
        15 => [
            'code' => '1100',
            'status' => 'Dikembalikan ke pengirim [Reason]',
            'description' => 'Dikembalikan ke pengirim [Reason]',
            'flag' => 'Shipped',
        ],
        16 => [
            'code' => '1110',
            'status' => 'Paket Dijemput Driver Sorting Hub',
            'description' => 'Paket dijemput oleh driver SHub [Public Name]',
            'flag' => 'Shipped',
        ],
        17 => [
            'code' => '1120',
            'status' => 'Paket Bersama Driver Sorting Hub',
            'description' => 'Paket Bersama Driver Sorting Hub',
            'flag' => 'Shipped',
        ],
        18 => [
            'code' => '1130',
            'status' => 'Paket Diterima di Sorting Hub',
            'description' => 'Paket sudah diterima di SHub [Public Name]',
            'flag' => 'Shipped',
        ],
        19 => [
            'code' => '1140',
            'status' => 'Paket Diproses di Sorting Hub',
            'description' => 'Paket sedang diproses di SHub [Public Name]',
            'flag' => 'Shipped',
        ],
        20 => [
            'code' => '1150',
            'status' => 'Paket Siap Dikirim dari Sorting Hub',
            'description' => 'Paket sudah siap dikirim dari SHub [Public Name]',
            'flag' => 'Shipped',
        ],
        21 => [
            'code' => '1160',
            'status' => 'Paket Dikirim ke [3PL_Name]',
            'description' => 'Paket Dikirim ke [3PL_Name]',
            'flag' => 'Shipped',
        ],
        22 => [
            'code' => '1170',
            'status' => 'Paket Diterima oleh [3PL_Name]',
            'description' => 'Paket Diterima oleh [3PL_Name]',
            'flag' => 'Shipped',
        ],
        23 => [
            'code' => '1180',
            'status' => 'Paket Dalam Perjalanan Bersama [3PL_Name]',
            'description' => 'Order Dalam Perjalanan dengan [3pl_Name]',
            'flag' => 'Shipped',
        ],
        24 => [
            'code' => '1190',
            'status' => 'Paket Sampai Ke Kota Tujuan',
            'description' => 'Order Sampai ke Kota Tujuan',
            'flag' => 'Shipped',
        ],
        25 => [
            'code' => '1310',
            'status' => 'Salah Alamat Tujuan',
            'description' => 'Salah Alamat Tujuan',
            'flag' => 'Shipped',
        ],
        26 => [
            'code' => '1320',
            'status' => 'Antar Ulang',
            'description' => 'Paket akan diantar Ulang',
            'flag' => 'Shipped',
        ],
        27 => [
            'code' => '1330',
            'status' => 'Tidak Ada Penerima',
            'description' => 'Tidak Ada Penerima',
            'flag' => 'Shipped',
        ],
        28 => [
            'code' => '1340',
            'status' => 'Paket Dikembalikan',
            'description' => 'Paket Dikembalikan',
            'flag' => 'Shipped',
        ],
        29 => [
            'code' => '1350',
            'status' => 'Lain Lain',
            'description' => 'Lain Lain - [reason]',
            'flag' => 'Shipped',
        ],
        30 => [
            'code' => '1360',
            'status' => 'Penjemputan Dikonfirmasi',
            'description' => 'Penjemputan sudah dikonfirmasi',
            'flag' => 'Shipped',
        ],
        31 => [
            'code' => '1410',
            'status' => 'Retur Dalam Perjalanan',
            'description' => 'Paket Retur Dalam Perjalanan',
            'flag' => 'Shipped',
        ],
        32 => [
            'code' => '1420',
            'status' => 'Retur Sampai ke Kota Pengirim',
            'description' => 'Paket Retur Sampai ke Kota Pengirim',
            'flag' => 'Shipped',
        ],
        33 => [
            'code' => '2000',
            'status' => 'Paket Terkirim',
            'description' => 'Paket sudah diterima oleh [receiver_name]',
            'flag' => 'Delivered',
        ],
        34 => [
            'code' => '3000',
            'status' => 'Paket Terkirim',
            'description' => 'Paket Terkirim',
            'flag' => 'Delivered',
        ],
        35 => [
            'code' => '2010',
            'status' => 'Paket Terkirim',
            'description' => 'Paket Terkirim dengan [3pl_Name]',
            'flag' => 'Delivered',
        ],
        36 => [
            'code' => '999',
            'status' => 'Cancelled by [actor_name]',
            'description' => 'Dibatalkan oleh [actor_name]',
            'flag' => 'Shipped',
        ]
    ];
}