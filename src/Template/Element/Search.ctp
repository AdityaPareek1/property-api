<div class="search_bar_sec">
  <div class="container">
    <h1>Find a home you'll love</h1>
   
    <section class="search-form">
      <!-- <form action="Search/search" method="GET" name="search" role="search"> -->
      <?php echo $this->Form->create('',array('url'=>array('controller'=>'Search','action'=>'search')));?>
        <p class="inp-wrap search-wrap"> <i class="fas fa-map-marker-alt"></i>
          <input value="" type="search" name="location" id="search-field" class="grid-75 form-control" placeholder="add more" />
        </p>
        <p class="inp-wrap cat-wrap"><i class="fas fa-building"></i>
          <select name="propertyType" id="categories" class="grid-80 form-control" placeholder="Property Type" >
            <option value="" selected>Property Type</option>
            <ul>
            <li>
            <option style="font-size: 20px;">Residential </option>
            </li>
            <li>
            <option>Flat</option>
            </li>
            <li>
            <option>House/Villa</option>
            </li>
            <li>
            <option>Plot</option>
            </li>
            </ul>
            <ul>
            <li>
            <option style="font-size: 20px;">Commercial</option>
            </li>
            <li>
            <option>Office Space</option>
            </li>
            <li>
            <option>Shop/Showroom</option>
            </li>
            <li>
            <option>Commercial Land</option>
            </li>
            <li>
            <option>Warehouse/Godown</option>
            </li>
            <li>
            <option>Industrial Building</option>
            </li>
            <li>
            <option>Industrial Shed</option>
            </li>
            </ul>
            <ul>
            <li>
            <option style="font-size: 20px;">Other Property Types</option>
            </li>
            <li>
            <option>Agricultural Land</option>
            </li>
            <li>
            <option>Farm House</option>
            </li>
            </ul>
          </select>
        </p>
        <p class="inp-wrap cat-wrap"> <i class="fas fa-building"></i>
          <select name="Budget" id="categoriesa" class="grid-80 form-control"  placeholder="Budget" >
            <option value=""  selected>Budget</option>
            <ul>
            <li>
            <option style="font-size: 20px;">Min Price </option>
            </li>
            <li>
            <option value="5lac">Rs 5 Lac</option>
            </li>
            <li>
            <option value="10lac">Rs 10 Lac</option>
            </li>
            <li>
            <option value="15lac" >Rs 15 Lac</option>
            </li>
            <li>
            <option value="20lac">Rs 20 Lac</option>
            </li>
            </ul>
            <ul>
            <li>
            <option  value=""style="font-size: 20px;">Max Price </option>
            </li>
            <li>
            <option value="5">Rs 5 Lac</option>
            </li>
            <li>
            <option value="10">Rs 10 Lac</option>
            </li>
            <li>
            <option value="15">Rs 15 Lac</option>
            </li>
            <li>
            <option value="20" >Rs 20 Lac</option>
            </li>
            </ul>
          </select>
        </p>
        <p class="inp-wrap submit-wrap">
          <button class="grid-100 btn form-control"> <span class="search-icon-container"> 
          <!-- Generated by IcoMoon.io -->
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="search-icon" width="768" height="768" viewBox="0 0 768 768">
            <g id="icomoon-ignore"> </g>
            <path d="M304.5 448.5c79.5 0 144-64.5 144-144s-64.5-144-144-144-144 64.5-144 144 64.5 144 144 144zM496.5 448.5l159 159-48 48-159-159v-25.5l-9-9c-36 31.5-84 49.5-135 49.5-115.5 0-208.5-91.5-208.5-207s93-208.5 208.5-208.5 207 93 207 208.5c0 51-18 99-49.5 135l9 9h25.5z"></path>
          </svg>
          </span> Search </button>
        </p>
      </form>
    </section>
  </div>
</div>