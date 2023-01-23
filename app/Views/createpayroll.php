
<body>
    <h1 style="justify-content:center; text-align:center; margin-top:30px;"><?php echo $title ?></h1>
<container-fluid>
    <div class="payroll">
        <div  class="justify-content-center text-align-center" >
            
        <form action="<?php base_url('/payroll/createpdf');?>" method="post">
            <div class="row">
                <div class="col-3">
                    <label>Adviser</label>
                    <div class="input-group mb-3">
                        <select class="form-select" aria-label="Default select example"  name="adviser">
                            <?php foreach ($adviserlist as $ad) : ?>
                                <option class="form-control" selected value="<?= $ad ?>"><?= $ad ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <label for="">Day</label>
                    <select class="form-select" aria-label="Default select example" name="day" >
                            <?php foreach ($days as $day) : ?>
                                <option class="form-control" selected value="<?= $day ?>"><?= $day ?></option>
                            <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-3">
                    <label for="">Month</label>
                    <select class="form-select" aria-label="Default select example" name="month">
                            <?php foreach ($months as $month) : ?>
                                <option  class="form-control" selected value="<?= $month ?>"><?= $month ?></option>
                            <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-2">
                    <label for="">Year</label>
                    <select class="form-select" aria-label="Default select example" name="year">
                            <?php foreach ($years as $year) : ?>
                                <option class="form-control" selected value="<?= $year ?>"><?= $year ?></option>
                            <?php endforeach; ?>
                    </select>
                </div>
                <div class=" col-3">
                    <label for="">Opening Balance</label>
                    <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1">$</button>
                        <input name="balance" type="number" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                <label for="">Leads Purchased</label>
                    <div class="input-group mb-3">
                        <input name="leads" type="number" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                    </div>
                </div>
                <div class="col-2">
                <label for="">Issue Charge</label>
                    <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1">$</button>
                        <input name="charge" type="number" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                    </div>
                </div>
                <div class="col-2">
                <label for="">Bonuses</label>
                    <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1">$</button>
                        <input name="bonus" type="number" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" id="ninja">
                    </div>
                </div>
                <div class="col-2">
                <label for="">Agency Release</label>
                    <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1">$</button>
                        <input name="release" type="number" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" id="jack">
                    </div>
                </div>
                <div class="col">
                    <label for="">Number of clients:</label>
                    <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1">$</button>
                        <input 
                        name="clientnumber" 
                        type="number"  
                        class="form-control" 
                        id="clientnumber"
                        placeholder="0" 
                        aria-label="Example text with button addon" 
                        aria-describedby="button-addon1" 
                        value="" 
                        oninput="show()">
                    </div>
                </div>
            </div>
            <div id="clientlist" style="display:none;">
                <?php for ($i = 0; $i < $clientnumber; $i++) : ?>
                <div class="row align-items-center justify-content-center" style="margin-top:50px;">
                    <div class="col-2">
                        <label for="">Client Name:</label>
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">$</button>
                            <input name="clientname" type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        </div>  
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-2">
                        <label for="">Onlinesure comissions:</label>
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">$</button>
                            <input name="elitecomissions" type="number" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        </div>  
                    </div>
                </div>
                <?php endfor; ?>
            </div>

            <div>
                <div class=""  style=" text-align:center; justify-content: center;" id="clientlist">
                    <button type="submit" name="submit" class="btn btn-success" style="width:10%; margin-top:40px;">Create client list</button>
                </div>
            </div>
        </div>
    </div>
</container>

<script>
function show() {
    var x = document.getElementById("clientnumber").value;
    if(x > 0){
        document.getElementById("clientlist").style.display = "block"; 
        document.getElementById("clientlist").style.textAlign = "center"; 
        document.getElementById("clientlist").style.justifyContent = "center"; 
    } else {
        document.getElementById("clientlist").style.display = "none"; 
    
    }
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
<style>
body {
  background-color: #0d1117;
}
p, label, h1
{
	color:#e0e0e0;
}
.text
{
	color: #e0e0e0;
	margin-bottom: -10px;
}
.payroll
{
    margin-top: 40px;
    padding-left: 100px;
    padding-right: 100px;
}
label
{
    text-align: center;
    justify-content: center;
    width: 100%;
    font-size: 14px;
    font-weight: bold;
}
.form-control
{
	background-color: #161b22;
	color: white;
}
.form-control:focus, .form-select
{
	background-color: #161b22;
	color: #e0e0e0;
}
</style>
