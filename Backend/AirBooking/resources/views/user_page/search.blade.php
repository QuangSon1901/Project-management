<div class="search__content">
    <form enctype="multipart/form-data" action="/search" method="post" id="searchForm">
        @csrf
        <div class="grid__row grid__row-search">
            <div class="grid__column-4 search-input">
                <h3 class="search-input__label">Điểm đi</h3>
                <input type="input" id="inputFromText" name="inputFromText" value="{{old('inputFromText')}}" class="search-input__field search-input_depflight" placeholder="Điểm đi" readonly="readonly" />
                <input type="hidden" id="inputFromID" name="inputFromID" value="{{old('inputFromID')}}" readonly="readonly" />
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
                <input type="input" id="inputToText" name="inputToText" value="{{old('inputToText')}}" class="search-input__field search-input_arrflight" placeholder="Điểm đến" readonly="readonly" />
                <input type="hidden" id="inputToID" name="inputToID" value="{{old('inputToID')}}" readonly="readonly" />
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
                        <input type="datetime-local" name="dateFromInput" value="{{old('dateFromInput')}}" class="search-date__field" placeholder="Ngày đi" />
                    </div>
                    <div class="grid__column-6 search-input">
                        <h3 class="search-input__label ">Ngày về</h3>
                        <input type="datetime-local" name="dateToInput" value="{{old('dateToInput')}}" class="search-date__field" placeholder="Ngày về" />
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
                            @for($i= 1; $i < 50; $i++) <option value="{{$i}}" {{ old('adultInput') == $i ? "selected" : "" }}>{{$i}}</option>
                                @endfor
                        </select>
                        <i class="icon-selectbox fa-solid fa-angle-down"></i>
                    </div>
                    <div class="grid__column-4 search-input">
                        <h3 class="search-input__label ">Trẻ em (2-12t)</h3>
                        <select name="childrenInput" style="padding-left: 10px;" class="search-input__field search-input_adult" readonly="readonly">
                            @for($i= 0; $i < 50; $i++) <option value="{{$i}}" {{ old('childrenInput') == $i ? "selected" : "" }}>{{$i}}</option>
                                @endfor
                        </select>
                        <i class="icon-selectbox fa-solid fa-angle-down"></i>
                    </div>
                    <div class="grid__column-4 search-input">
                        <h3 class="search-input__label ">Em bé (< 2t)</h3>
                                <select name="infantInput" style="padding-left: 10px;" class="search-input__field search-input_infant" readonly="readonly">
                                    @for($i= 0; $i < 20; $i++) <option value="{{$i}}" {{ old('infantInput') == $i ? "selected" : "" }}>{{$i}}</option>
                                        @endfor
                                </select>
                                <i class="icon-selectbox fa-solid fa-angle-down"></i>
                    </div>
                </div>
            </div>
            <div class="grid__column-6 search-submit">
                <label class="option-checkbox">
                    <input type="checkbox" name="searchCheckbox" {{ old('searchCheckbox') == 'on' ? "checked" : "" }} id="searchCheckbox">
                    <i class="icon-checkbox"></i>
                    Tìm vé giá rẻ trong tháng
                </label>
                <button type="submit" style="width: 190px;" id="btnSearch" class="btn btn--primary">Tìm chuyến
                    bay</button>
            </div>
        </div>
    </form>
</div>