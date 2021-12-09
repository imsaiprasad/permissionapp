<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <div class="final">
    <div class="container">
   <p name="ok"></p>

        <div class="row">


            <table class="col-xs-7 table-bordered table-striped table-condensed table-fixed">
                <thead>
                    <tr>
                        <th class="col">Full Name</th>
                        <th class="col">ROLL_NO</th>
                        <th class="col">problem statements</th>
                        <th class="col">Desciption</th>
                        <th class="col">Approval</th>
                    </tr>
                </thead>
                

                <tbody>
                    <tr>
                        <td class="col">K.PAVAN</td>
                        <td class="col">19H51A0544</td>
                        <td class="col">gate permission </td>   
                        <td class="col">cheptha wait re...........................................................</td>
                        <td class="col">
                            <script>
                                function onlyOne(checkbox) {
                                    var checkboxes = document.getElementsByName('check')
                                    checkboxes.forEach((item) => {
                                        if (item !== checkbox) item.checked = false
                                    })
                                }
                            </script>
                                <label for="check">YES
                                <input type="checkbox" name="check" value="YES" onclick="onlyOne(this)">
                                </label>
                                <label for="check">NO
                                <input type="checkbox" name="check" value="NO" onclick="onlyOne(this)">
                                </label>
                        </td>   
                    </tr>
    
                </tbody>
            </table>
        </div>
    </div>
    <div class="adjust">
        

    <button type="button">Submit</button>
    </div>
</div>

</body>

</html>