<div class="search__content">
    <form enctype="multipart/form-data" action="/search" method="post" id="searchForm">
        @csrf
        <div class="grid__row grid__row-search">
            <div class="grid__column-4 search-input">
                <h3 class="search-input__label">Điểm đi</h3>
                <input type="input" id="inputFromText" name="inputFromText" class="search-input__field search-input_depflight" placeholder="Điểm đi" readonly="readonly" value="" />
                <input type="hidden" id="inputFromID" name="inputFromID" readonly="readonly" value="" />
                <div class="search-input__hint search-input__hint--hidden" id="hintDepflight">
                    <div class="search-input__hint-airpost">
                        <h4>Sân bay nội địa</h4>
                        <div class="grid__row search-input__hint-list">
                            @foreach($hint as $row)
                            <div class="grid__column-2-4">
                                <h4 class="search-input__hint-area">{{$row['inland_name']}}</h4>
                                <ul>
                                    @foreach($row['inland'] as $item)
                                    <li class="search-input__hint-place" data-id="{{$item['airport_id']}}">{{$item['cities_name']}} ({{$item['airport_alias']}})</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="search-input__hint-airpost">
                        <h4>Sân bay quốc tế</h4>
                        <div class="grid__row search-input__hint-list">
                            @foreach($hint2 as $row)
                            <div class="grid__column-2-4">
                                <h4 class="search-input__hint-area">{{$row['international_name']}}</h4>
                                <ul>
                                    @foreach($row['international'] as $item)
                                    <li class="search-input__hint-place" data-id="{{$item['airport_id']}}">{{$item['cities_name']}} ({{$item['airport_alias']}})</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid__column-4 search-input">
                <img class="search__double-arrow" id="double-arrow" src="{{asset('user_asset/assets/img/double_arrow-v2.png')}}" alt="">
                <h3 class="search-input__label">Điểm đến</h3>
                <input type="input" id="inputToText" name="inputToText" class="search-input__field search-input_arrflight" placeholder="Điểm đến" readonly="readonly" value="" />
                <input type="hidden" id="inputToID" name="inputToID" readonly="readonly" value="" />
                <div class="search-input__hint search-input__hint--hidden" id="hintArrflight">
                    <div class="search-input__hint-airpost">
                        <h4>Sân bay nội địa</h4>
                        <div class="grid__row search-input__hint-list">
                            @foreach($hint as $row)
                            <div class="grid__column-2-4">
                                <h4 class="search-input__hint-area">{{$row['inland_name']}}</h4>
                                <ul>
                                    @foreach($row['inland'] as $item)
                                    <li class="search-input__hint-place" data-id="{{$item['airport_id']}}">{{$item['cities_name']}} ({{$item['airport_alias']}})</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="search-input__hint-airpost">
                        <h4>Sân bay quốc tế</h4>
                        <div class="grid__row search-input__hint-list">
                            @foreach($hint2 as $row)
                            <div class="grid__column-2-4">
                                <h4 class="search-input__hint-area">{{$row['international_name']}}</h4>
                                <ul>
                                    @foreach($row['international'] as $item)
                                    <li class="search-input__hint-place" data-id="{{$item['airport_id']}}">{{$item['cities_name']}} ({{$item['airport_alias']}})</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid__column-4">
                <div class="grid__row">
                    <div class="grid__column-6 search-input">
                        <h3 class="search-input__label ">Ngày đi</h3>
                        <input type="datetime-local" name="dateFromInput" class="search-date__field" placeholder="Ngày đi" />
                    </div>
                    <div class="grid__column-6 search-input">
                        <h3 class="search-input__label ">Ngày về</h3>
                        <input type="datetime-local" name="dateToInput" class="search-date__field" placeholder="Ngày về" />
                    </div>
                </div>
            </div>
        </div>
        <div class="grid__row grid__row-search">
            <div class="grid__column-6 ">
                <div class="grid__row">
                    <div class="grid__column-4 search-input">
                        <h3 class="search-input__label ">Người lớn (≥ 12t)</h3>
                        <select name="adultInput" style="padding-left: 10px;" class="search-input__field search-input_adult" readonly="readonly">
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                            <option value="47">47</option>
                            <option value="48">48</option>
                            <option value="49">49</option>
                            <option value="50">50</option>
                        </select>
                        <i class="icon-selectbox fa-solid fa-angle-down"></i>
                    </div>
                    <div class="grid__column-4 search-input">
                        <h3 class="search-input__label ">Trẻ em (2-12t)</h3>
                        <select name="childrenInput" style="padding-left: 10px;" class="search-input__field search-input_adult" readonly="readonly">
                            <option value="0" selected>0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                            <option value="47">47</option>
                            <option value="48">48</option>
                            <option value="49">49</option>
                            <option value="50">50</option>
                        </select>
                        <i class="icon-selectbox fa-solid fa-angle-down"></i>
                    </div>
                    <div class="grid__column-4 search-input">
                        <h3 class="search-input__label ">Em bé (< 2t)</h3>
                                <select name="infantInput" style="padding-left: 10px;" class="search-input__field search-input_infant" readonly="readonly">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                </select>
                                <i class="icon-selectbox fa-solid fa-angle-down"></i>
                    </div>
                </div>
            </div>
            <div class="grid__column-6 search-submit">
                <label class="option-checkbox">
                    <input type="checkbox" name="searchCheckbox" id="searchCheckbox">
                    <i class="icon-checkbox"></i>
                    Tìm vé giá rẻ trong tháng
                </label>
                <button type="submit" style="width: 190px;" id="btnSearch" class="btn btn--primary">Tìm chuyến
                    bay</button>
            </div>
        </div>
    </form>
</div>