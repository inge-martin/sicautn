<meta http-equiv="refresh" content="5" />
<style type="text/css">

  .sinEstilo{
    border: 0px solid;
    height: 35px; 
    width: 160px; 
    margin: 5px;
    font-size: 12px; 
    text-align:center; 
    padding: 10px; 
  }

  .vacio{
    float:left; border-style:none; border-width:0px; border-radius: 150%; width: 35px;
  }

  .divNormal{
    float:left; border-style:none; border-width:0px;
  }

  .naveA{
    border-top-right-radius: 50%;
  }

  .naveB{
    border-top-left-radius: 40%;
    border-bottom-left-radius: 40%;
  }

  .naveC{
    border-top-right-radius: 40%;
    border-bottom-right-radius: 40%;
  }

  .naveD{
    border-top-left-radius: 40%;
  } 
  thead tr td {
  	text-align: center;
    font-weight: bold; 
  }
</style>

<div class="col-md-12" align="center">
  <h1 class="box-title">Estacionamiento</h1>
</div>

<section class="content">
  <center>
    <div class="box-body" style="overflow: auto">
      <table>
        <thead>
          <tr>
            <td>Nave A</td>
            <td width="100">Pasillo</td>
            <td>Nave B</td>
            <td>Nave C</td>
            <td width="100">Pasillo</td>
            <td>Nave D</td>
          </tr>
        </thead>

        <tbody>
          <tr>
            <th>
              <!--Nave A-->
              <div class="divNormal">

                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[1]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A1</div>

                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[2]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A2</div>
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[3]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A3</div>
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[4]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A4</div>
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[5]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A5</div>
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[6]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A6</div>
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[7]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A7</div> 
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[8]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A8</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[9]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A9</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[10]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A10</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[11]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A11</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[12]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A12</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[13]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A13</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[14]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A14</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[15]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A15</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[16]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A16</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[17]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A17</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[18]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A18</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[19]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A19</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[20]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A20</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[21]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A21</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[22]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A22</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[23]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A23</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[24]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A24</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[25]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A25</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[26]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A26</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[27]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A27</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[28]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A28</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[29]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A29</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[30]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveA">Lugar: A30</div>    
              </div>        
            </th>
            <th>
              <img src="<?php echo base_url(); ?>assets/dist/img/pasillo1.png"/>
            </th>
            <th>
              <!--Nave B-->
              <div class="divNormal">
                <img src="<?php echo base_url(); ?>assets/dist/img/flecha.png"/>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center;padding: 18px; <?php echo ($query[31]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveB">Lugar: B1</div>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center; padding: 18px; <?php echo ($query[32]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveB">Lugar: B2</div>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center; padding: 18px; <?php echo ($query[33]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveB">Lugar: B3</div>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center; padding: 18px; <?php echo ($query[34]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveB">Lugar: B4</div>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center; padding: 18px; <?php echo ($query[35]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveB">Lugar: B5</div>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center; padding: 18px; <?php echo ($query[36]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveB">Lugar: B6</div>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center; padding: 18px; <?php echo ($query[37]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveB">Lugar: B7</div>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center; padding: 18px; <?php echo ($query[38]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveB">Lugar: B8</div>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center; padding: 18px; <?php echo ($query[39]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveB">Lugar: B9</div>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center; padding: 18px; <?php echo ($query[40]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveB">Lugar: B10</div>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center; padding: 18px; <?php echo ($query[41]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveB">Lugar: B11</div>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center; padding: 18px; <?php echo ($query[42]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveB">Lugar: B12</div>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center; padding: 18px; <?php echo ($query[43]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveB">Lugar: B13</div>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center; padding: 18px; <?php echo ($query[44]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveB">Lugar: B14</div>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center; padding: 18px; <?php echo ($query[45]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveB">Lugar: B15</div>
              </div>
            </th>
            <th>
              <!--Nave C-->
              <div class="divNormal">
                <img src="<?php echo base_url(); ?>assets/dist/img/flecha.png"/>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center; padding: 18px; <?php echo ($query[46]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveC">Lugar: C1</div>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center; padding: 18px; <?php echo ($query[47]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveC">Lugar: C2</div>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center; padding: 18px; <?php echo ($query[48]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveC">Lugar: C3</div>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center; padding: 18px; <?php echo ($query[49]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveC">Lugar: C4</div>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center; padding: 18px; <?php echo ($query[50]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveC">Lugar: C5</div>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center; padding: 18px; <?php echo ($query[51]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveC">Lugar: C6</div>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center; padding: 18px; <?php echo ($query[52]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveC">Lugar: C7</div>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center; padding: 18px; <?php echo ($query[53]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveC">Lugar: C8</div>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center; padding: 18px; <?php echo ($query[54]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveC">Lugar: C9</div>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center; padding: 18px; <?php echo ($query[55]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveC">Lugar: C10</div>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center; padding: 18px; <?php echo ($query[56]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveC">Lugar: C11</div>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center; padding: 18px; <?php echo ($query[57]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveC">Lugar: C12</div>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center; padding: 18px; <?php echo ($query[58]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveC">Lugar: C13</div>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center; padding: 18px; <?php echo ($query[59]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveC">Lugar: C14</div>
                <div style="border: 2px dashed;height: 60px; width: 160px; margin: 5px; font-size: 12px; text-align:center; padding: 18px; <?php echo ($query[60]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveC">Lugar: C15</div>
              </div>
            </th>
            <th>
              <img src="<?php echo base_url(); ?>assets/dist/img/pasillo2.png"/>
            </th>
            <th>
              <!--Nave D-->
              <div class="divNormal">
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[61]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D1</div>
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[62]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D2</div>
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[63]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D3</div>
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[64]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D4</div>
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[65]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D5</div>
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[66]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D6</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[67]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D7</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[68]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D8</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[69]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D9</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[70]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D10</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[71]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D11</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[72]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D12</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[73]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D13</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[74]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D14</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[75]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D15</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[76]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D16</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[77]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D17</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[78]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D18</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[79]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D19</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[80]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D20</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[81]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D21</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[82]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D22</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[83]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D23</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[84]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D24</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[85]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D25</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[86]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D26</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[87]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D27</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[88]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D28</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[89]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D29</div>    
                <div style="border: 2px dashed;height: 35px; width: 160px; margin: 5px; font-size: 12px; text-align:center; vertical-align: middle; padding: 5px; <?php echo ($query[90]->status == 0) ? 'background-color:#55FF55;' : 'background-color:#FF4444;'; ?>" class="naveD">Lugar: D30</div>    
              </div>
            </th>
          </tr>
        </tbody>
      </table>
    </div>
  </center>
</section>