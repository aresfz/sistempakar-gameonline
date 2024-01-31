&nbsp; <br><br>
<section class="inn">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class='alert alert-primary alert-dismissible'>
                    <h4><i class="bi bi-exclamation-triangle"></i>&nbsp;Perhatian !</h4>
                    <p>Silahkan pilih gejala sesuai dengan kondisi anda</p>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                </div>
                <?php echo form_open_multipart('Diagnosa/proses'); ?>
                <table class="table tabled-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Gejala yang dialami</th>
                            <th scope="col">Kondisi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $null = ''; $no=1;
                        foreach ($gejala as $items) { ?>
                            <tr>
                                <th scope="row" width="10%"><?= $no++ ?></th>
                                <td><?= $items->namaGejala?></td>
                                <td width="25%">
                                    <div class="form-group">
                                        <select name="kondisi[]" id="kondisi" class="form-control" required>
                                            <option value="<?= $null . '_' . $null; ?>">Pilih</option>
                                            <option value="<?= $items->idGejala . '_' . 2; ?>">Pasti</option>
                                            <option value="<?= $items->idGejala . '_' . 3; ?>">Hampir Pasti</option>
                                            <option value="<?= $items->idGejala . '_' . 4; ?>">Kemungkinan Besar</option>
                                            <option value="<?= $items->idGejala . '_' . 5; ?>">Mungkin</option>
                                            <option value="<?= $items->idGejala . '_' . 6; ?>">Tidak Tahu</option>
                                            <option value="<?= $items->idGejala . '_' . 7; ?>">Mungkin Tidak</option>
                                            <option value="<?= $items->idGejala . '_' . 8; ?>">Kemungkinan Besar Tidak
                                            </option>
                                            <option value="<?= $items->idGejala . '_' . 9; ?>">Hampir Pasti Tidak</option>
                                            <option value="<?= $items->idGejala . '_' . 10; ?>">Pasti Tidak</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                    <button type="submit" class="btn btn-primary" style="float: right" >Analisa</button>
                <?php echo form_close(); ?>
            </div>
            <script>
    document.addEventListener('DOMContentLoaded', function() {
        const selectElements = document.querySelectorAll('select[name="kondisi[]"]');
        const analisaButton = document.querySelector('.btn.btn-primary');

        analisaButton.disabled = true;

        selectElements.forEach(selectElement => {
            selectElement.addEventListener('change', function() {
                let selectedOptions = 0;
                selectElements.forEach(select => {
                    if (select.value !== '') {
                        selectedOptions++;
                    }
                });

                if (selectedOptions > 0) {
                    analisaButton.disabled = false;
                } else {
                    analisaButton.disabled = true;
                }
            });
        });

        analisaButton.addEventListener('click', function(event) {
            let selectedOptions = 0;
            selectElements.forEach(select => {
                if (select.value !== '') {
                    selectedOptions++;
                }
            });

            if (selectedOptions === 0) {
                event.preventDefault();
                alert('Harap pilih setidaknya satu opsi sebelum melakukan analisis.');
            }
        });
    });
</script>

        </div>
    </div>
</section>
<link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">