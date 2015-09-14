<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="tools/invoices/main.css" />
        <link rel="stylesheet" type="text/css" href="images/css/font-awesome.css" />
    </head>
    <body>

        <div id="add_invoice_header">
            <h2>Please enter the new invoice information below.</h2>
        </div>

        <form id="add_invoice" action="#" method="post">

            <p>
                <label>Company</label>
                <?php
                $company_selected = filter_input(INPUT_POST, 'companies');

                $pdo = new PDO("mysql:host=localhost;dbname=the_doors; port=3307;", "root", "");

                $dbs = $pdo->prepare('select * from contact_table');
                $companies = array();
                $dbs->execute();
                $companies = $dbs->fetchAll(PDO::FETCH_ASSOC);

                echo '<select name="company_name">';
                echo '<option value=" ">Select a Company</option>';
                foreach ($companies as $value) {
                    if ($company_selected == $value) {
                        echo '<option value="' . $value['company_name'] . '" selected="selected">' . $value['company_name'] . '</option>';
                    } else {
                        echo '<option value="' . $value['company_name'] . '">' . $value['company_name'] . '</option>';
                    }
                }
                echo '</select>';
                ?>
            </p>

            <p>	
                <label>Invoice Number:</label>
                <input name="invoice_num" class="validate" type="text" value="" placeholder="123" maxlength="10" />
                <span class="hide">*</span>
            </p>

            <p>
                <label>Date</label>
                <input type="date" id="date">
                <span class="hide">*</span>
            </p>

            <p>
            <table id="table_data">
                <thead>
                <tr>
                    <th>Description</th>
                    <th>Price</th> 
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input name="description_1" class="validate" type="text" maxlength="150"</td>
                    <td><input class="invoice_price" name="price_1" type="number" maxlength="99" onchange="calculate()"</td> 
                    <td><input class="invoice_quantity" name="quantity_1" type="number" maxlength="99" onchange="calculate()"</td>
                    <td><input id="invoice_total" class="invoice_total" name="total_1" type="text" maxlength="99" onchange="calculate()"</td>
                
                </tr>
                </tbody>
            </table>
            <input type="button" id="add_row" value="Add Additional Items"/>
            <input type="button" id="delete_row" value="Delete Last Item"/>
        </p>

        <p>
            <label>Total</label>
            <input type="text">
        </p>
        
        <p>
            <label>Tax</label>
            <input type="text">
        </p>        
        
        <p>
            <input type="checkbox" name="tax_exempt" value="">Tax Exempt<br/>    
        </p>
        
        <p>
            <label>Grand Total</label>
            <input type="text">
        </p>
            

        <input type="submit" name="submit_save" value="Update/Save" />
        <input type="submit" name="submit_send" value="Save and Send" />


    </form>

    <script type="text/javascript" src="tools/invoices/invoices.js"></script>

</body>

</html>