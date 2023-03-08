<?php
include_once("header.php");
include_once("include/config.php");

$limit = 10;
$order = 'ASC';

if(isset($_POST['limit'])){
    session_start();
    $_SESSION['limit'] = $_POST['limit'];
    $limit = $_POST['limit'];
}

if(isset($_POST['order'])){
    // session_start();
    $_SESSION['order'] = $_POST['order'];
    $order = $_POST['order'];
}

?>
<div class="container" style="margin-top:50px">
    <div class="row">
        <div class="alert" id="error-msg">

        </div>

        <div class="alert alert-success" id="success-msg">

        </div>
        <br>
        <br>


        <form method="post" action="">
            <label for="select">Select a value:</label>
            <select name="limit" id="select">
                <option name="limit" value="10">10</option>
                <!-- USABILITY -->
                <!-- If the option selected is 20 or 30, those will be selected/autofocused automatically, I don't know if this is the best code practice... -->
                <option name="limit" value="20" <?php if ($limit ==20){ echo "selected"; } ?> >20</option>
                <option name="limit" value="30" <?php if ($limit ==30){ echo "selected"; } ?> >30</option>
            </select>
            <p>Sort by:</p>
            <select name="order">
                <option name="order" <?php if ($order == 'ASC'){ echo "selected"; } ?> >ASC</option>
                <option name="order"<?php if ($order == 'DESC'){ echo "selected"; } ?> >DESC</option>
            </select>
            <br>

            <input type="submit" name="submit" class="btn btn-primary" value="Modify">
        </form>

        <a class="btn btn-primary" href="addStudent.php" style="float:right">Add Student</a>

        <div class="widget widget-table action-table">

            <div class="widget-header"><i class="icon-th-list"></i>
                <h3>A Table Example</h3>

            </div>
            <!-- /widget-header -->
            <div class="widget-content">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th> First Name</th>
                        <th> Last Name</th>
                        <th> Username</th>
                        <th> Email</th>
                        <th class="td-actions"></th>
                    </tr>
                    </thead>
                    <tbody id="target-content">
                    </tbody>
                </table>

            </div>

            <div id="append-pagination">
            </div>

            <!-- /widget-content -->
        </div>
    </div>
</div>

<!-- Button to trigger modal -->
<?php
include_once("footer.php");
?>