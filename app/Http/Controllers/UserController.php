<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct(){
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    // =======================
    // LIST USER
    // =======================
    public function index(){
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser()
        ];

        return view('list_user', $data);
    }

    // =======================
    // CREATE USER
    // =======================
    public function create(){
        $kelasModel = new Kelas();
        $Kelas = $kelasModel->getKelas();
        $data = [
            'title' => 'Create User',
            'kelas' => Kelas::all()
        ];

        return view('create_user', $data);
    }

    public function store(Request $request){
        $this->userModel->create([
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'kelas_id' => $request->input('kelas_id'),
        ]);
          
        return redirect()->to('/user')->with('success', 'Data pengguna berhasil ditambahkan!');
    }

    // =======================
    // EDIT USER
    // =======================
    public function edit($id){
        $user = UserModel::findOrFail($id);
        $kelas = Kelas::all();

        return view('edit_user', compact('user', 'kelas'));
    }

    // =======================
    // UPDATE USER
    // =======================
    public function update(Request $request, $id){
        $user = UserModel::findOrFail($id);

        $user->update([
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->to('/user')->with('success', 'Data pengguna berhasil diperbarui!');
    }

    // =======================
    // DELETE USER
    // =======================
    public function destroy($id){
        $user = UserModel::findOrFail($id);
        $user->delete();

        return redirect()->to('/user')->with('success', 'Data pengguna berhasil dihapus!');
    }
}
