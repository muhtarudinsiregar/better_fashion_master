
 
<div id="container">
    <h1>Upload dan Resize Gambar Otomatis <span style="float: right">Dida Nurwanda</span></h1>
 
    <div id="body">
        <form method="post" enctype="multipart/form-data">        
             
            <?php echo $error; ?>
             
            <div>
                <label for="userfile">Pilih gambar yang akan di upload : </label>
                <br />
                <input type="file" name="userfile" />
            </div>
             <div>
                 <label for="kategori">kategori</label>
                 <select name="kategori" id="">
                     <option value="baju">Baju</option>
                     <option value="celana_panjang">Celana Panjang</option>
                 </select>
             </div>
             <div>
                 <label for="nama">Nama Barang</label>
                 <input type="text" name="nama">
             </div>
             <div>
                 <label for="harga">Harga Barang</label>
                 <input type="text" name="harga">
             </div>
             <div>
                 <label for="detail_barang">Keterangan Barang</label>
                 <input type="text" name="detail_barang">
             </div>                                         
            <div style="margin-top:20px">
                <input type="submit" value="Upload" name="upload" />
                <input type="submit" value="Preview Image">
            </div>
         
        </form>
         
        <div>
            <?php echo $output; ?>
        </div>
    </div>
 
    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>
 
</body>
</html>