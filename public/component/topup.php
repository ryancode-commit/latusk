<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Nama Nasabah</th>
            <th>Saldo-TopUp</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Tiger Nixon</td>
            <td>Rp.100.000</td>
            <td>
                <button class="w-fit px-3 py-1 bg-green-500 rounded-full text-white">Terima</button>
                <button class="w-fit px-3 py-1 bg-red-500 rounded-full text-white">Tolak</button>
            </td>
        </tr>
        <tr>
            <td>Tiger Nixon</td>
            <td>Rp.100.000</td>
            <td>
                <button class="w-fit px-3 py-1 bg-green-500 rounded-full text-white">Terima</button>
                <button class="w-fit px-3 py-1 bg-red-500 rounded-full text-white">Tolak</button>
            </td>
        </tr>
        <tr>
            <td>Tiger Nixon</td>
            <td>Rp.100.000</td>
            <td>
                <button class="w-fit px-3 py-1 bg-green-500 rounded-full text-white">Terima</button>
                <button class="w-fit px-3 py-1 bg-red-500 rounded-full text-white">Tolak</button>
            </td>
        </tr>


    </tbody>
    <tfoot>
        <tr>
            <th>Nama Nasabah</th>
            <th>Saldo</th>
            <th>Status</th>

        </tr>
    </tfoot>
</table>

<div class="bg-white w-fit mx-auto my-10">
    <div class="flex flex-col gap-2 items-center">
        <h1 class="text-3xl font-semibold text-center">TOPUP</h1>
        <div class="flex flex-col mt-6 gap-y-3">
            <div class="flex flex-col">
                <label class="text-xl" for="topup">topup</label>
                <input class=" p-2 text-xl border-b border-gray-200 
                     bg-gray-100 rounded-tl-md rounded-tr-md" type="number" name="topup" id="topup">
            </div>
            <div class="flex flex-col">
                <label class="text-xl" for="topup">NIS Siswa</label>
                <input class=" p-2 text-xl border-b border-gray-200 
                     bg-gray-100 rounded-tl-md rounded-tr-md" type="text" name="topup" id="topup">
            </div>

            <div class="flex flex-col">
                <label class="text-xl" for="pin">Pin</label>
                <input class="p-2 text-xl border-b border-gray-200 
                     bg-gray-100 rounded-tl-md rounded-tr-md" type="password" name="pin" id="pin">
            </div>

        </div>
        <div class="flex justify-center">
            <!-- <button class="px-20 py-4 bg-blue-600 text-white rounded-full " name="login">Login</button> -->
            <a href="#" class="px-10 py-2 text-2xl font-bold bg-blue-600 text-white rounded-full " name="topup">TopUp</a>

        </div>
    </div>
</div>