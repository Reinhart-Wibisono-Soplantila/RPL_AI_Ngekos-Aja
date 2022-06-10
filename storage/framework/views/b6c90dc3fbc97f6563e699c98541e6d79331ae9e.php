

<?php $__env->startSection('main'); ?>
    <!-- Container -->
    <section class="container p-5 text-center">
        <div class="header text-center">
            <h3 class="fw-bold">Data Calon Penyewa Kos</h3>
            <h5>Masukkan Kelengkapan Informasi Anda Sebagai Calon Penyewa Kos</h5>
        </div>
    
        <div class="container-lg shadow mt-5 p-5" style="border-radius: 8px">
            <form action="/pencari-kos/booking" method="post">
                <?php echo csrf_field(); ?>
            <!-- Jenis Kelamin -->
                <div class="mb-3 text-start">
                    <label for="exampleDataList" class="form-label fw-bolder">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" value="Laki-laki" type="radio" name="Jenis_kelamin" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                        Laki-laki
                        </label>
                    </div>
        
                    <div class="form-check">
                        <input class="form-check-input" value="Perempuan" type="radio" name="Jenis_kelamin" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                        Perempuan
                        </label>
                    </div>
                    <span class="text-danger">
                        <?php $__errorArgs = ['Jenis_kelamin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </span>

                    <!-- Nomor Telepon Orang Tua -->
                    <div class="mt-3 mb-3 text-start">
                        <label for="exampleFormControlInput1" class="form-label fw-bolder">No. Telepon Orang Tua</label>
                        <input type="text" name="Nomor_telepon" value="<?php echo e(old('Nomor_telepon')); ?>" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan no. telepon orang tua anda">
                        <span class="text-danger">
                            <?php $__errorArgs = ['Nomor_telepon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </span>
                    </div>
                    
                    <!-- Masa Pembayaran Kos -->
                    <div class="mt-3 mb-3 text-start">
                        <label for="exampleDataList" class="form-label fw-bolder">Masa Pembayaran Kos</label>
                        <select class="form-select" id="inputGroupSelect02" name="Masa_pembayaran_kos">
                            <option selected value="Harga_sewa_perbulan">Per bulan (Rp. <?php echo e($datas[0]->Harga_sewa_perbulan); ?>)</option>
                            <option value="Harga_sewa_per3bulan">Per 3 bulan (Rp. <?php echo e($datas[0]->Harga_sewa_per3bulan); ?>)</option>
                            <option value="Harga_sewa_per6bulan">Per 6 bulan (Rp. <?php echo e($datas[0]->Harga_sewa_per6bulan); ?>)</option>
                            <option value="Harga_sewa_pertahun">Per tahun (Rp. <?php echo e($datas[0]->Harga_sewa_pertahun); ?>)</option>
                        </select>
                        <span class="text-danger">
                            <?php $__errorArgs = ['Masa_pembayaran_kos'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </span>
                    </div>
        
                    <!-- Tanggal Menetap -->
                    <div class="mt-3 mb-3 text-start">
                        <label for="exampleFormControlInput1" class="form-label fw-bolder">Kapan anda mulai menetap di kos?</label>
                        <div class="input-group date" id="datepicker">
                            <input type="text" class="form-control" value="<?php echo e(old('Tanggal_menetap')); ?>" name="Tanggal_menetap" placeholder="bulan/hari/tahun">
                            <span class="input-group-append">
                                <span class="input-group-text bg-white">
                                    <i class="bi bi-calendar4-week"></i>
                                </span>
                            </span>
                            
                        </div>
                        <span class="text-danger">
                            <?php $__errorArgs = ['Tanggal_menetap'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </span>
                    </div>
                    <input type="hidden" name="Id_kos"value=<?php echo e($datas[0]->Id_kos); ?>>
                    <input type="hidden" name="Nama_kos" value='<?php echo e($datas[0]->Nama_indekos); ?>'>
                    <input type="hidden" name="Jenis_kelamin_kamar" value=<?php echo e($datas[0]->Gender_kamar); ?>>
                    <input type="hidden" name="UserId"value=<?php echo e(auth()->user()->UserId); ?>>
                    <input type="hidden" name="Email"value=<?php echo e(auth()->user()->email); ?>>
                    <input type="hidden" name="Nama"value=<?php echo e(auth()->user()->nama); ?>>
                    <!-- Tanggal Menetap -->
                    <div class="mt-3 mb-3 text-start">
                        <label for="exampleFormControlInput1" class="form-label fw-bolder">Berapa lama anda akan menetap di kos?</label>
                        <div class="input-group">
                            <div style="width: 50%">
                                <input type="text" aria-label="First name" value="<?php echo e(old('Jumlah_lama_menetap')); ?>" name="Jumlah_lama_menetap" class="form-control" placeholder="Lama menetap kos dalam bentuk angka (contoh: 1, 2, dsb)">
                                <span class="text-danger">
                                    <?php $__errorArgs = ['Jumlah_lama_menetap'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </span>
                            </div>
                            <select class="form-select" aria-label="Default select example" name="Satuan_lama_menetap">
                                <option value="Bulan">Bulan</option>
                                <option value="Tahun">Tahun</option>
                                
                            </select>
                                
                        </div>
                    </div>
                    <button type="submit" class="d-grid gap-2 col-6 mx-auto btn btn-warning justify-content-center" style="border-radius: 8px">Selanjutnya</button>
                
            </form>
        </div>
    </section>
    
    <!-- Button Back To Home -->
    <div class="d-grid gap-2 col-6 mx-auto">
    <a href="<?php echo e(url('/')); ?>" class="btn btn-outline-warning justify-content-center" type="button" style="border-radius: 8px">Kembali Ke Beranda</a>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('Layout.booking_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Reinhart Soplantila\Documents\Project\TI\laravell\ngekos-aja-2\resources\views/Page/Page_Pencari_Kos/Booking/data_booking.blade.php ENDPATH**/ ?>