<div class="search__content">
    <form action="/search" method="get" id="searchForm">
        <div class="grid__row grid__row-search">
            <div class="grid__column-4 search-input">
                <h3 class="search-input__label">Điểm đi</h3>
                <input type="input" id="inputFromText" name="inputFromText" value="<?php echo e(old('inputFromText')); ?>" class="search-input__field search-input_depflight <?php $__errorArgs = ['inputFromText'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> inputError <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Điểm đi" readonly="readonly" />
                <?php $__errorArgs = ['inputFromText'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="textError">
                    <?php echo e($message); ?>

                </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <input type="hidden" id="inputFromID" name="inputFromID" value="<?php echo e(old('inputFromID')); ?>" readonly="readonly" />
                <div class="search-input__hint search-input__hint--hidden" id="hintDepflight">
                    <div class="search-input__hint-airpost">
                        <h4>Sân bay nội địa</h4>
                        <div class="grid__row search-input__hint-list">
                            <?php $__currentLoopData = $hint; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="grid__column-2-4">
                                <h4 class="search-input__hint-area"><?php echo e($row['inland_name']); ?></h4>
                                <ul>
                                    <?php $__currentLoopData = $row['inland']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="search-input__hint-place" data-id="<?php echo e($item['airport_id']); ?>"><?php echo e($item['cities_name']); ?> (<?php echo e($item['airport_alias']); ?>)</li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="search-input__hint-airpost">
                        <h4>Sân bay quốc tế</h4>
                        <div class="grid__row search-input__hint-list">
                            <?php $__currentLoopData = $hint2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="grid__column-2-4">
                                <h4 class="search-input__hint-area"><?php echo e($row['international_name']); ?></h4>
                                <ul>
                                    <?php $__currentLoopData = $row['international']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="search-input__hint-place" data-id="<?php echo e($item['airport_id']); ?>"><?php echo e($item['cities_name']); ?> (<?php echo e($item['airport_alias']); ?>)</li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid__column-4 search-input">
                <img class="search__double-arrow" id="double-arrow" src="<?php echo e(asset('user_asset/assets/img/double_arrow-v2.png')); ?>" alt="">
                <h3 class="search-input__label">Điểm đến</h3>
                <input type="input" id="inputToText" name="inputToText" value="<?php echo e(old('inputToText')); ?>" class="search-input__field search-input_arrflight <?php $__errorArgs = ['inputToText'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> inputError <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Điểm đến" readonly="readonly" />
                <?php $__errorArgs = ['inputToText'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="textError">
                    <?php echo e($message); ?>

                </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <input type="hidden" id="inputToID" name="inputToID" value="<?php echo e(old('inputToID')); ?>" readonly="readonly" />
                <div class="search-input__hint search-input__hint--hidden" id="hintArrflight">
                    <div class="search-input__hint-airpost">
                        <h4>Sân bay nội địa</h4>
                        <div class="grid__row search-input__hint-list">
                            <?php $__currentLoopData = $hint; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="grid__column-2-4">
                                <h4 class="search-input__hint-area"><?php echo e($row['inland_name']); ?></h4>
                                <ul>
                                    <?php $__currentLoopData = $row['inland']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="search-input__hint-place" data-id="<?php echo e($item['airport_id']); ?>"><?php echo e($item['cities_name']); ?> (<?php echo e($item['airport_alias']); ?>)</li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="search-input__hint-airpost">
                        <h4>Sân bay quốc tế</h4>
                        <div class="grid__row search-input__hint-list">
                            <?php $__currentLoopData = $hint2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="grid__column-2-4">
                                <h4 class="search-input__hint-area"><?php echo e($row['international_name']); ?></h4>
                                <ul>
                                    <?php $__currentLoopData = $row['international']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="search-input__hint-place" data-id="<?php echo e($item['airport_id']); ?>"><?php echo e($item['cities_name']); ?> (<?php echo e($item['airport_alias']); ?>)</li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid__column-4">
                <div class="grid__row">
                    <div class="grid__column-6 search-input">
                        <h3 class="search-input__label ">Ngày đi</h3>
                        <input type="datetime-local" name="dateFromInput" value="<?php echo e(old('dateFromInput')); ?>" class="search-date__field <?php $__errorArgs = ['dateFromInput'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> inputError <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Ngày đi" />
                        <?php $__errorArgs = ['dateFromInput'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="textError">
                            <?php echo e($message); ?>

                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="grid__column-6 search-input">
                        <h3 class="search-input__label ">Ngày về</h3>
                        <input type="datetime-local" name="dateToInput" value="<?php echo e(old('dateToInput')); ?>" class="search-date__field" placeholder="Ngày về" />
                    </div>
                </div>
            </div>
        </div>
        <div class="grid__row grid__row-search">
            <div class="grid__column-6 ">
                <div class="grid__row">
                    <div class="grid__column-4 search-input">
                        <h3 class="search-input__label ">Người lớn (≥ 12t)</h3>
                        <select name="adultInput" style="padding-left: 10px;" class="search-input__field search-input_adult <?php $__errorArgs = ['adultInput'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> inputError <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" readonly="readonly">
                            <?php for($i= 1; $i < 50; $i++): ?> <option value="<?php echo e($i); ?>" <?php echo e(old('adultInput') == $i ? "selected" : ""); ?>><?php echo e($i); ?></option>
                                <?php endfor; ?>
                        </select>
                        <?php $__errorArgs = ['adultInput'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="textError">
                            <?php echo e($message); ?>

                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <i class="icon-selectbox fa-solid fa-angle-down"></i>
                    </div>
                    <div class="grid__column-4 search-input">
                        <h3 class="search-input__label ">Trẻ em (2-12t)</h3>
                        <select name="childrenInput" style="padding-left: 10px;" class="search-input__field search-input_adult <?php $__errorArgs = ['childrenInput'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> inputError <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" readonly="readonly">
                            <?php for($i= 0; $i < 50; $i++): ?> <option value="<?php echo e($i); ?>" <?php echo e(old('childrenInput') == $i ? "selected" : ""); ?>><?php echo e($i); ?></option>
                                <?php endfor; ?>
                        </select>
                        <?php $__errorArgs = ['childrenInput'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="textError">
                            <?php echo e($message); ?>

                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <i class="icon-selectbox fa-solid fa-angle-down"></i>
                    </div>
                    <div class="grid__column-4 search-input">
                        <h3 class="search-input__label ">Em bé (< 2t)</h3>
                                <select name="infantInput" style="padding-left: 10px;" class="search-input__field search-input_infant <?php $__errorArgs = ['infantInput'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> inputError <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" readonly="readonly">
                                    <?php for($i= 0; $i < 20; $i++): ?> <option value="<?php echo e($i); ?>" <?php echo e(old('infantInput') == $i ? "selected" : ""); ?>><?php echo e($i); ?></option>
                                        <?php endfor; ?>
                                </select>
                                <?php $__errorArgs = ['infantInput'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="textError">
                                    <?php echo e($message); ?>

                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <i class="icon-selectbox fa-solid fa-angle-down"></i>
                    </div>
                </div>
            </div>
            <div class="grid__column-6 search-submit">
                <label class="option-checkbox">
                    <input type="checkbox" name="searchCheckbox" <?php echo e(old('searchCheckbox') == 'on' ? "checked" : ""); ?> id="searchCheckbox">
                    <i class="icon-checkbox"></i>
                    Tìm vé giá rẻ trong tháng
                </label>
                <button type="submit" style="width: 190px;" id="btnSearch" class="btn btn--primary">Tìm chuyến
                    bay</button>
            </div>
        </div>
    </form>
</div><?php /**PATH C:\Users\Son\Desktop\Project-management\Backend\AirBooking\resources\views/user_page/search.blade.php ENDPATH**/ ?>