<div class="main" style="margin-left:300px">
            <h2> Daftar Barang <h2>
            <div class="textMedium"> 
                <div class="column">
                <p>Sort By :</p> 
                </div>
                <form class="column" action="index.php" method="post">
                    <input type="submit" id="sortAll" name="all" value="all">
                    <input type="submit" id="sortHarga" name="harga" value="harga">
                </form> 
            </div>
            <table class="padding">
                <tr>
                    <th>SKU</th>
                    <th>NAMA</th>
                    <th>KATEGORI</th>
                    <th>STOK</th>
                    <th>HARGA</th>
                </tr>
                <?php
                    if(isset($_POST['harga'])){
                        //query
                        $sql_barang = "SELECT * from barang ORDER BY harga_satuan;";
                    }else{
                        $sql_barang = "SELECT * from barang;";
                    }
                    //executing P skill query
                    $barang = $conn->query($sql_barang);
                    while($list_barang = mysqli_fetch_array($barang)){
                        echo ("
                            <tr>
                                <td>". $list_barang['sku'] ."</td>
                                <td>". $list_barang['nama'] ."</td>
                                <td>". $list_barang['kategori'] ."</td>
                                <td>". $list_barang['jumlah_stok'] ."</td>
                                <td>". $list_barang['harga_satuan'] ."</td>
                            <tr>
                        ");
                    }
                ?>
            </table>
            <!-- Trigger/Open The Modal -->
            <button id="tambahBtn" class=" padding" style="background-color:lightblue; position : fixed">Tambah Data</button>

            <!-- The Modal -->
            <div id="tambah" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close">&times;</span>
                        <h4>Tambah Data</h4>
                    </div>
                    <div class="modal-body">
                        
                    <form action="index.php" method="post">
                        <label for="sku">SKU         :</label><br>                        
                         <input type="text" id="sku" name="sku" oninput="this.value = this.value.toUpperCase()"><br>
                         <label for="nama">Nama Barang : </label><br>
                        <input type="text" id="nama" name="nama" oninput="this.value = this.value.toUpperCase()"><br>
                        <label for="kategori">Kategori    : </label><br>
                        <input type="text" id="kategori" name="kategori" oninput="this.value = this.value.toUpperCase()"><br>
                        <label for="stok">Jumlah Stok : </label><br>
                        <input type="text" id="stok" name="stok"><br>
                        <label for="harga">Harga Satuan: </label><br>
                        <input type="text" id="harga" name="harga"><br>
                        <input type="submit" name="save" value="save">
                    </form>
                    </div>
                </div>

            </div>
            <!-- Trigger/Open The Modal -->
            <button id="cariBtn" class=" padding" style="background-color:lightblue; position : fixed; margin:50px">Cari data</button>

            <!-- The Modal -->
            <div id="cari" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close">&times;</span>
                        <h4>Cari Data</h4>
                    </div>
                    <div class="modal-body">
                        
                    <form action="index.php" method="post">
                        <label for="cariSKU">Masukkan Data SKU         :</label><br>                        
                        <input type="text" id="cariSKU" name="cariSKU" oninput="this.value = this.value.toUpperCase()"><br>
                        <p><input type="button" name="cari" method="post" onclick="searchElement()" value="Search!!"></p>
                        
                    </form>
                    <table id="searchTable" class="padding" style="display:none">
                            <tr>
                                <th>SKU</th>
                                <th>NAMA</th>
                                <th>KATEGORI</th>
                                <th>STOK</th>
                                <th>HARGA</th>
                            </tr>
                            <?php
                                //query
                                $cariSKU = $_POST['cariSKU'];
                                $sql_cari = "SELECT * from barang WHERE sku='$cariSKU'";
                                //executing P skill query
                                $cari = $conn->query($sql_cari);
                                while($list_cari = mysqli_fetch_array($cari)){
                                    echo ("
                                        <tr>
                                            <td>". $list_cari['sku'] ."</td>
                                            <td>". $list_cari['nama'] ."</td>
                                            <td>". $list_cari['kategori'] ."</td>
                                            <td>". $list_cari['jumlah_stok'] ."</td>
                                            <td>". $list_cari['harga_satuan'] ."</td>
                                        <tr>
                                    ");
                                }
                            ?>
                        </table>
                        
                    <script>
                        function searchElement() {
                            document.getElementById("cariSKU").style.display = "none";
                            document.getElementById("searchTable").style.display = "block";
                        }
                    </script>
                    </div>
                </div>

            </div>
        </div>

            
        
        <script>
            // Get the modal
            var modal1 = document.getElementById("tambah");
            var modal2 = document.getElementById("cari");
            // Get the button that opens the modal
            var btn1 = document.getElementById("tambahBtn");
            var btn2 = document.getElementById("cariBtn");
            // Get the <span> element that closes the modal
            var span1 = document.getElementsByClassName("close")[0];
            var span2 = document.getElementsByClassName("close")[1];
            // When the user clicks the button, open the modal 
            btn1.onclick = function() {
                modal1.style.display = "block";
            }
            btn2.onclick = function() {
                modal2.style.display = "block";
            }
            // When the user clicks on <span> (x), close the modal
            span1.onclick = function() {
                modal1.style.display = "none";
            }
            span2.onclick = function() {
                modal2.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
            if (event.target == modal1) {
                modal1.style.display = "none";
                }
                else if(event.target == modal2){
                    modal2.style.display = "none";
                }
            }
        </script>