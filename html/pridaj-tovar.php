 <!doctype html public "-//W3C//DTD HTML 4.0 //EN">
<html>
    <head>
        <link href="https://www.w3schools.com/w3css/4/w3.css" rel=stylesheet type=text/css>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <p align = "center">
            <div class="col-10" align="center" >
                <div class="col-4" align="right">
                    <div class="form-container">
                            <form action="index.php?menu=7" method="POST" >
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Názov</label>
                                    <div class="col-sm-6">
                                    <input type="text" name="nazov" class="form-control" placeholder="Názov">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Výrobca</label>
                                    <div class="col-sm-6">
                                    <input name="vyrobca" type="text" class="form-control" placeholder="Výrobca">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Cena</label>
                                    <div class="col-sm-6">
                                    <input name="cena" type="text" class="form-control" placeholder="Cena">
                                    </div>
                                </div>
                                <div class="form-group row pb-2">
                                    <label  class="col-sm-4 col-form-label">Stav ks</label>
                                    <div class="col-sm-6">
                                    <input name="kusov" type="text" class="form-control" placeholder="Stav ks">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <div class="col-sm-6" align="right">
                                    <button type="submit" class="btn btn-primary">pridaj</button>
                                    </div>
                                    <div class="col-sm-6" align="left">
                                    <button type="reset" class="btn btn-danger">vymaž</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </p>
    </body>
</html>
