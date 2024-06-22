<form id="calcForm">
    @csrf
    <div class="mb-3">
        <label for="desc" class="form-label">Support :</label><br>
        <small>Persamaan Linear & Kuadrat</small><br>
    </div>
    <div class="mb-3">
        <label for="equationInput" class="form-label">Masukkan Soalnya :</label>
        <input type="text" class="form-control" id="equationInput" name="equation"
            placeholder="Contoh : 5, -10 ( 5x -10 = 0 )">
    </div>
    <div class="mb-3">
        <!-- <label for="calculationType" class="form-label">Tipe Perhitungan :</label> -->
        <select class="form-select" style="display: none; visibility: hidden;" id="calculationType" name="type">
    <option value="equation">Persamaan Linear & Kuadrat</option>
</select>
    </div>
    <button type="submit" class="btn" style="background-color: #01a951; color: white;" id="calculateBtn">TEKAN UNTUK MULAI PENGHITUNGAN</button>
        <span id="spinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
    </button>
</form>
