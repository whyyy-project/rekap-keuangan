<div class="container-fluid">
  <div class="row bg-light rounded pt-2 px-12 mx-1 mt-3">
  
  <div class="col-12 d-flex justify-content-between align-items-center">
  <div class="col">
  <h5>Data Uang Keluar</h5>
  </div>
  <div class="col d-inline text-end">
    
    <a href="<?= base_url() ?>" class="btn btn-outline-success d-inline-flex">Export PDF</a>
    <a href="<?= base_url() ?>" class="btn btn-outline-success d-inline-flex">Export CSV</a>
    <div class="nav-item dropdown btn">
      <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
        <span class="d-none d-lg-inline-flex">Filter Data</span>        
      </a>
      <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0 text-center">
        <a href="#" class="dropdown-item">Tanggal</a>
        <a href="#" class="dropdown-item">Status</a>
        <a href="#" class="dropdown-item">Jenis</a>
      </div>
    </div>
  </div>
</div>
    
  
  <table id="tabelUangKeluar" class="table table-striped" style="width:100%">
      <thead>
          <tr>
            <th>Tanggal</th>
            <th>Pembayaran</th>
              <th>Nama</th>
              <th>Taawun</th>
              <th>Kekurangan</th>
              <th>Status</th>
          </tr>
      </thead>
      <tbody>
          <tr>
            <td>2011-04-25</td>
            <td>$320,800</td>
            <td>Tiger Nixon</td>
            <td>61</td>
            <td>Edinburgh</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2011-07-25</td>
            <td>$170,750</td>
            <td>Garrett Winters</td>
            <td>63</td>
            <td>Tokyo</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2009-01-12</td>
            <td>$86,000</td>
            <td>Ashton Cox</td>
            <td>66</td>
            <td>San Francisco</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2012-03-29</td>
            <td>$433,060</td>
            <td>Cedric Kelly</td>
            <td>22</td>
            <td>Edinburgh</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2008-11-28</td>
            <td>$162,700</td>
            <td>Airi Satou</td>
            <td>33</td>
            <td>Tokyo</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2012-12-02</td>
            <td>$372,000</td>
            <td>Brielle Williamson</td>
            <td>61</td>
            <td>New York</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2012-08-06</td>
            <td>$137,500</td>
            <td>Herrod Chandler</td>
            <td>59</td>
            <td>San Francisco</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2010-10-14</td>
            <td>$327,900</td>
            <td>Rhona Davidson</td>
            <td>55</td>
            <td>Tokyo</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2009-09-15</td>
            <td>$205,500</td>
            <td>Colleen Hurst</td>
            <td>39</td>
            <td>San Francisco</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2008-12-13</td>
            <td>$103,600</td>
            <td>Sonya Frost</td>
            <td>23</td>
            <td>Edinburgh</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2008-12-19</td>
            <td>$90,560</td>
            <td>Jena Gaines</td>
            <td>30</td>
            <td>London</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2013-03-03</td>
            <td>$342,000</td>
            <td>Quinn Flynn</td>
            <td>22</td>
            <td>Edinburgh</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2008-10-16</td>
            <td>$470,600</td>
            <td>Charde Marshall</td>
            <td>36</td>
            <td>San Francisco</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2012-12-18</td>
            <td>$313,500</td>
            <td>Haley Kennedy</td>
            <td>43</td>
            <td>London</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2010-03-17</td>
            <td>$385,750</td>
            <td>Tatyana Fitzpatrick</td>
            <td>19</td>
            <td>London</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2012-11-27</td>
            <td>$198,500</td>
            <td>Michael Silva</td>
            <td>66</td>
            <td>London</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2010-06-09</td>
            <td>$725,000</td>
            <td>Paul Byrd</td>
            <td>64</td>
            <td>New York</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2009-04-10</td>
            <td>$237,500</td>
            <td>Gloria Little</td>
            <td>59</td>
            <td>New York</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2012-10-13</td>
            <td>$132,000</td>
            <td>Bradley Greer</td>
            <td>41</td>
            <td>London</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2012-09-26</td>
            <td>$217,500</td>
            <td>Dai Rios</td>
            <td>35</td>
            <td>Edinburgh</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2011-09-03</td>
            <td>$345,000</td>
            <td>Jenette Caldwell</td>
            <td>30</td>
            <td>New York</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2009-06-25</td>
            <td>$675,000</td>
            <td>Yuri Berry</td>
            <td>40</td>
            <td>New York</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2011-12-12</td>
            <td>$106,450</td>
            <td>Caesar Vance</td>
            <td>21</td>
            <td>New York</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2010-09-20</td>
            <td>$85,600</td>
            <td>Doris Wilder</td>
            <td>23</td>
            <td>Sydney</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2009-10-09</td>
            <td>$1,200,000</td>
            <td>Angelica Ramos</td>
            <td>47</td>
            <td>London</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2010-12-22</td>
            <td>$92,575</td>
            <td>Gavin Joyce</td>
            <td>42</td>
            <td>Edinburgh</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2010-11-14</td>
            <td>$357,650</td>
            <td>Jennifer Chang</td>
            <td>28</td>
            <td>Singapore</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2011-06-07</td>
            <td>$206,850</td>
            <td>Brenden Wagner</td>
            <td>28</td>
            <td>San Francisco</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2010-03-11</td>
            <td>$850,000</td>
            <td>Fiona Green</td>
            <td>48</td>
            <td>San Francisco</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2011-08-14</td>
            <td>$163,000</td>
            <td>Shou Itou</td>
            <td>20</td>
            <td>Tokyo</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2011-06-02</td>
            <td>$95,400</td>
            <td>Michelle House</td>
            <td>37</td>
            <td>Sydney</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2009-10-22</td>
            <td>$114,500</td>
            <td>Suki Burks</td>
            <td>53</td>
            <td>London</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2011-05-07</td>
            <td>$145,000</td>
            <td>Prescott Bartlett</td>
            <td>27</td>
            <td>London</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2008-10-26</td>
            <td>$235,500</td>
            <td>Gavin Cortez</td>
            <td>22</td>
            <td>San Francisco</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2011-03-09</td>
            <td>$324,050</td>
            <td>Martena Mccray</td>
            <td>46</td>
            <td>Edinburgh</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2009-12-09</td>
            <td>$85,675</td>
            <td>Unity Butler</td>
            <td>47</td>
            <td>San Francisco</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2008-12-16</td>
            <td>$164,500</td>
            <td>Howard Hatfield</td>
            <td>51</td>
            <td>San Francisco</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2010-02-12</td>
            <td>$109,850</td>
            <td>Hope Fuentes</td>
            <td>41</td>
            <td>San Francisco</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2009-02-14</td>
            <td>$452,500</td>
            <td>Vivian Harrell</td>
            <td>62</td>
            <td>San Francisco</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2008-12-11</td>
            <td>$136,200</td>
            <td>Timothy Mooney</td>
            <td>37</td>
            <td>London</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2008-09-26</td>
            <td>$645,750</td>
            <td>Jackson Bradshaw</td>
            <td>65</td>
            <td>New York</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2011-02-03</td>
            <td>$234,500</td>
            <td>Olivia Liang</td>
            <td>64</td>
            <td>Singapore</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2011-05-03</td>
            <td>$163,500</td>
            <td>Bruno Nash</td>
            <td>38</td>
            <td>London</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2009-08-19</td>
            <td>$139,575</td>
            <td>Sakura Yamamoto</td>
            <td>37</td>
            <td>Tokyo</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2013-08-11</td>
            <td>$98,540</td>
            <td>Thor Walton</td>
            <td>61</td>
            <td>New York</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2009-07-07</td>
            <td>$87,500</td>
            <td>Finn Camacho</td>
            <td>47</td>
            <td>San Francisco</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2012-04-09</td>
            <td>$138,575</td>
            <td>Serge Baldwin</td>
            <td>64</td>
            <td>Singapore</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2010-01-04</td>
            <td>$125,250</td>
            <td>Zenaida Frank</td>
            <td>63</td>
            <td>New York</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2012-06-01</td>
            <td>$115,000</td>
            <td>Zorita Serrano</td>
            <td>56</td>
            <td>San Francisco</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2013-02-01</td>
            <td>$75,650</td>
            <td>Jennifer Acosta</td>
            <td>43</td>
            <td>Edinburgh</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2011-12-06</td>
            <td>$145,600</td>
            <td>Cara Stevens</td>
            <td>46</td>
            <td>New York</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2011-03-21</td>
            <td>$356,250</td>
            <td>Hermione Butler</td>
            <td>47</td>
            <td>London</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2009-02-27</td>
            <td>$103,500</td>
            <td>Lael Greer</td>
            <td>21</td>
            <td>London</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2010-07-14</td>
            <td>$86,500</td>
            <td>Jonas Alexander</td>
            <td>30</td>
            <td>San Francisco</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2008-11-13</td>
            <td>$183,000</td>
            <td>Shad Decker</td>
            <td>51</td>
            <td>Edinburgh</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2011-06-27</td>
            <td>$183,000</td>
            <td>Michael Bruce</td>
            <td>29</td>
            <td>Singapore</td>
            <td class="text-success">Lunas</td>
          </tr>
          <tr>
            <td>2011-01-25</td>
            <td>$112,000</td>
            <td>Donna Snider</td>
            <td>27</td>
            <td>New York</td>
            <td class="text-success">Lunas</td>
          </tr>
      </tbody>
      <tfoot>
          <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Salary</th>
          </tr>
      </tfoot>
    </table>
  </div>
</div>
  


