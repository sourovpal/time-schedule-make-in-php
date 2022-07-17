<style>
    table{border:1px solid #ddd;border-collapse: collapse;width:100%;}
    table thead tr td{width:100px;padding:8px 15px;border:1px solid #ddd;font-size:15px;color:#6e6e6e;white-space: nowrap;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;}
</style>

<table>
    <thead>
        <tr>
            <td>User</td>
            <?php for($i=1; $i<=date('t'); $i++){ ?>
                <td width="20%"><?= date('D-d, m Y', strtotime(date('Y-m-').$i))  ?></td>
            <?php } ?>
        </tr>
    </thead>
</table>
