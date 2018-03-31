<?php
include 'header.php';
if (isset($_SESSION['no'])) {
    echo "<script type='text/javascript'>alert('failed!')</script>";
    unset($_SESSION['no']);
} elseif (isset($_SESSION['yes'])) {
    echo "<script type='text/javascript'>alert('Success!')</script>";
    unset($_SESSION['yes']);
}
?>




<div class="container-fluid second">
    <div class="">
        <form action="insert.php" method="post">
            <div class="open">
                <div class="refresh">
                    <a href="#">REFRESH GAMES</a>
                </div>
                <span class="span1"></span>
                <span class="span2"></span>
                <div class="dhaka">
                    <h3>DHAKA NIGHT</h3>
                    <p>DHAKA TEXT</p>
                    <input type="text" name="dhaka_text" value="">
                    <p>DHAKA TIME</p>
                    <input type="text" name="dhaka_time" value="">
                </div>
                <span class="span1"></span>

                <div class="dhaka">
                    <h3>CHITTAGONG NIGHT</h3>
                    <p>CHITTAGONG TEXT</p>
                    <input type="text" name="chittagong_text" value="">
                    <p>CHITTAGONG TIME</p>
                    <input type="text" name="chittagong_time" value="">
                </div>
                <span class="span1"></span>

                <div class="dhaka">
                    <h3>CHITTAGONG NIGHT</h3>
                    <p>SYLET TEXT</p>
                    <input type="text" name="sylet_text" value="">
                    <p>SYLET TIME</p>
                    <input type="text" name="sylet_time" value="">
                    <div class="w3ls-btn">
                        <input type="submit" value="submit" name="submit">
                    </div>
                </div>
                <span class="span1"></span>
            </div>
        </form>
    </div>

    <form action="insert.php" method="post">
        <table class="table table-bordered text-center" style="background: #fff;">
            <thead>
                <tr class="bg-success">
                    <th scope="col">DAY</th>
                    <th scope="col">DHAKA</th>
                    <th scope="col">CHITTAGONG</th>
                    <th scope="col">SYLHET</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-light">
                    <th scope="row">FR</th>
                    <td> <input type="text" name="dhaka_fr" value=""> </td>
                    <td> <input type="text" name="chittagong_fr" value=""> </td>
                    <td> <input type="text" name="sylet_fr" value=""> </td>
                </tr>
                <tr class="table-warning">
                    <th scope="row">SA</th>
                    <td> <input type="text" name="dhaka_sa" value=""> </td>
                    <td> <input type="text" name="chittagong_sa" value=""> </td>
                    <td> <input type="text" name="sylet_sa" value=""> </td>
                </tr>
                <tr class="table-info">
                    <th scope="row">SU</th>
                    <td> <input type="text" name="dhaka_su" value=""> </td>
                    <td> <input type="text" name="chittagong_su" value=""> </td>
                    <td> <input type="text" name="sylet_su" value=""> </td>
                </tr>
                <tr class="table-danger">
                    <th scope="row">MO</th>
                    <td> <input type="text" name="dhaka_mo" value=""> </td>
                    <td> <input type="text" name="chittagong_mo" value=""> </td>
                    <td> <input type="text" name="sylet_mo" value=""> </td>
                </tr>
                <tr class="table-primary">
                    <th scope="row">TU</th>
                    <td> <input type="text" name="dhaka_tu" value=""> </td>
                    <td> <input type="text" name="chittagong_tu" value=""> </td>
                    <td> <input type="text" name="sylet_tu" value=""> </td>
                </tr>
                <tr class="table-active">
                    <th scope="row">WE</th>
                    <td> <input type="text" name="dhaka_we" value=""> </td>
                    <td> <input type="text" name="chittagong_we" value=""> </td>
                    <td> <input type="text" name="sylet_we" value=""> </td>
                </tr>
                <tr class="table-success">
                    <th scope="row">TH</th>
                    <td> <input type="text" name="dhaka_th" value=""> </td>
                    <td> <input type="text" name="chittagong_th" value=""> </td>
                    <td> <input type="text" name="sylet_th" value=""> </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="text-center">
                        <button style="margin-left: 90px;" type="submit" name="day-submit" class="btn btn-primary mb-2">Submit</button>
                    </td>
                </tr>
            </tfoot>
        </table>
    </form>

</div>
</body>
</html>
