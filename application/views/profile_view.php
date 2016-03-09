<h2>My Regular Savings Accounts</h2>
<hr>
<?php
if (isset($records)) : foreach ($records as $row) : ?>

    <?php
    $start_time = $row->start_date;
    $date1 = new DateTime('now');
    $date2 = new DateTime($start_time); ?>

    <?php
    $p = $row->start_amount;
    $i = $row->interest;
    $c = $row->compound_frequency;
    $n = (int)$date1->diff($date2)->format("%m");
    $r = $row->monthly_deposits;

    $x = $i / $c;
    $z = $n / 12;
    $y = pow((1 + $x), ($z * $c));

    if($p!=0)
    {
        $Total_Balance = $p * $y + ($r * ($y - 1) / $x);
    }
    else
    {
        $Total_Balance = 1 + $y + ($r * ($y - 1) / $x);
    }
    ?>

    <?php
    $remain = $row->length - (int)$date1->diff($date2)->format("%d");
    ?>

    <?php
     $Total_Interest = ($row->monthly_deposits + $row->start_amount) * (int)$date1->diff($date2)->format("%m");

     $w =  $Total_Balance - $Total_Interest;
    ?>


    <table border="1">
        <tbody>
        <tr>
            <td>Acc Name</td>
            <td>INT rate</td>
            <td>Initial deposit</td>
            <td>monthly deposit</td>
            <td>age</td>
            <td>maturity</td>
            <td>total</td>
            <td>total iontrest</td>
        </tr>
       <tr>
            <td>
                <?php echo $row->bank_name; ?>
            </td>

            <td>
                <?php echo $row->interest; ?>
            </td>

            <td>
                <?php echo $row->monthly_deposits; ?>
            </td>

           <td>
               <?php echo $row->start_amount; ?>
           </td>

            <td>
                <?php echo $date1->diff($date2)->format ("%y years, %m months, %d days, %h hours, %i minuets and %s seconds"); ?>
            </td>

            <td>
                <?php echo $remain; ?>
            </td>

            <td>
                <?php echo round($Total_Balance, 2, PHP_ROUND_HALF_UP); ?>
            </td>

            <td>
               <?php echo round($Total_Interest, 2, PHP_ROUND_HALF_UP); ?></td>
            </tr>
        <?php
        ?>
        </tbody>
    </table>


<?php endforeach; ?>

<?php else : ?>
    <h3>You Have No Accounts</h3>
    <h4>Why No Add A Account?</h4>
<?php endif; ?>


