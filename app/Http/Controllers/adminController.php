<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\instansi;
use App\Models\Pelaporan;
use Illuminate\Http\Request;
use App\Models\kategori_laporan;

class adminController extends Controller
{
    public function showDashAdm()
    {
        $pelaporans = Pelaporan::with(['kategori_laporan','instansi'])->get();
        return view('admin.dashboardAdm', compact(['pelaporans']));
    }


    //user
    public function editUser()
    {
        $users = User::all();
        return view('admin.editUser', compact(['users']));
    }

    public function hapusUser()
    {
        User::find(request('idUser'))->delete();
        return back()->withSuccess('User berhasil dihapus');
    }

    //instansi
    public function editInstansi()
    {
        $instansis = instansi::all();
        return view('admin.editInstansi', compact(['instansis']));
    }
    public function hapusInstansi()
    {
        instansi::find(request('idInstansi'))->delete();
        return back()->withSuccess('Instansi berhasil dihapus');
    }

    public function updateInstansi()
    {
        instansi::find(request('idInstansi'))->update([
            'nama'=>request('nama'),
            'alamat'=>request('alamat'),
            'telp'=>request('telp')

        ]);
        return back()->withSuccess('Instansi berhasil di update');
    }


    //kategori
    public function editKategori()
    {
        $categories = kategori_laporan::all();
        return view('admin.editKategori', compact(['categories']));
    }

    public function hapusKategori()
    {
        kategori_laporan::find(request('categoryId'))->delete();
        return back()->withSuccess('Kategori berhasil dihapus');
    }

    public function updateKategori()
    {
        kategori_laporan::find(request('categoryId'))->update([
            'nama'=>request('nama')

        ]);
        return back()->withSuccess('Kategori berhasil di update');
    }
}
