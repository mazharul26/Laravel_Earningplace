
@extends("deshboard")
@section("content")
<style>
    .subcat{
        float: left;
        padding: 0;
        margin: 0;
        width: 45%;

    }
    .floatleft{
        float: right;
        padding: 0;
        margin: 0;
        width: 45%;
    }

    .text_title{
        width: 100%;
    }
    
    /*---------FSelect--CSS---Start -Here----*/
    
    .fs-wrap {
    display: inline-block;
    cursor: pointer;
    line-height: 1;
    width: 200px;
}

.fs-label-wrap {
    position: relative;
    background-color: #fff;
    border: 1px solid #ddd;
    cursor: default;
}

.fs-label-wrap,
.fs-dropdown {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.fs-label-wrap .fs-label {
    padding: 6px 22px 6px 8px;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
}

.fs-arrow {
    width: 0;
    height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 5px solid #333;
    position: absolute;
    top: 0;
    right: 5px;
    bottom: 0;
    margin: auto;
}

.fs-dropdown {
    position: absolute;
    background-color: #fff;
    border: 1px solid #ddd;
    width: 200px;
    margin-top: 5px;
    z-index: 1000;
}

.fs-dropdown .fs-options {
    max-height: 200px;
    overflow: auto;
}

.fs-search input {
    border: none !important;
    box-shadow: none !important;
    outline: none;
    padding: 4px 0;
    width: 100%;
}

.fs-option,
.fs-search,
.fs-optgroup-label {
    padding: 6px 8px;
    border-bottom: 1px solid #eee;
    cursor: default;
}

.fs-option:last-child {
    border-bottom: none;
}

.fs-search {
    padding: 0 4px;
}

.fs-option {
    cursor: pointer;
}

.fs-option.disabled {
    opacity: 0.4;
    cursor: default;
}

.fs-option.hl {
    background-color: #f5f5f5;
}

.fs-wrap.multiple .fs-option {
    position: relative;
    padding-left: 30px;
}

.fs-wrap.multiple .fs-checkbox {
    position: absolute;
    display: block;
    width: 30px;
    top: 0;
    left: 0;
    bottom: 0;
}

.fs-wrap.multiple .fs-option .fs-checkbox i {
    position: absolute;
    margin: auto;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    width: 14px;
    height: 14px;
    border: 1px solid #aeaeae;
    border-radius: 2px;
    background-color: #fff;
}

.fs-wrap.multiple .fs-option.selected .fs-checkbox i {
    background-color: rgb(17, 169, 17);
    border-color: transparent;
    background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAGCAYAAAD+Bd/7AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABx0RVh0U29mdHdhcmUAQWRvYmUgRmlyZXdvcmtzIENTNXG14zYAAABMSURBVAiZfc0xDkAAFIPhd2Kr1WRjcAExuIgzGUTIZ/AkImjSofnbNBAfHvzAHjOKNzhiQ42IDFXCDivaaxAJd0xYshT3QqBxqnxeHvhunpu23xnmAAAAAElFTkSuQmCC');
    background-repeat: no-repeat;
    background-position: center;
}

.fs-wrap .fs-option:hover {
    background-color: #f5f5f5;
}

.fs-wrap .fs-option.disabled:hover {
    background-color: none;
}

.fs-optgroup-label {
    font-weight: bold;
    text-align: center;
}

.hidden {
    display: none;
}


  /*---------FSelect--CSS---End -Here----*/

</style>
<br/><br/>


<br/><br/>   <br/><br/>
<div class="container w3-container">
    <div class="row  ">
        <div class="col-sm-3" style="width:"></div>
        <div class="col-sm-9 well " style="width:80%;float: right">
            <form class="" action="{{route('gigs')}}" method="post" >
                @csrf
                <p>Gigs Title</p>
                <textarea class="text_title" name="gigs_title">I will</textarea>
                <br/><br/>
                <select class="category form-control1 subcat" name="category">
                    <option value="0">Choice Category</option>
                    @foreach($allcat as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>

                    @endforeach
                </select>
                <select class="subcategory form-control1 floatleft" name="subcategory">
                    <option value="0">Choice SubCategory</option>
                    @foreach( $allsubcat as $subcat)

                    <option value="{{$subcat->id}}">{{$subcat->subcat_name}}</option>

                    @endforeach
                </select>
                <br/><br/>
                <select class=" service form-control1 subcat"  name="service">
                    <option value="0">Choice Service</option>
                    @foreach( $allservice as $service)

                    <option value="{{$service->id}}">{{$service->service_name }}</option>

                    @endforeach
                </select>
                <select class=" product form-control1 floatleft" name="gigmetadata">
                    <option value="0">Choice Gig Metadata</option>
                    @foreach( $allgigmetadata as $gigmetadata)

                    <option value="{{$gigmetadata->id}}">{{$gigmetadata->metadata_name  }}</option>

                    @endforeach
                </select>
                <br/><br/>
                <p>Search Tags</p>
                <select class="test" multiple="multiple">
                   
                        <option value="0">Choice Search Tags</option>
                         @foreach( $allsearch as $search)
                        
                        <option value="{{$search->id}}" >{{$search->name}}</option>
                            @endforeach
                 
                   
                </select>
                <br/><br/>
                <input type="submit" name="sub" class="btn btn-success" value="Save and Continue" />
                <a href="#" class="btn btn-danger" style="float: right">Canceal</a>
            </form>
        </div>
    </div>
</div>
<br/><br/>   <br/><br/><br/><br/>   <br/><br/><br/><br/>   <br/><br/><br/><br/> <br/><br/>  
<link href="{{url('/')}}/public/fselect/jquery.tokenize.css" rel='stylesheet' type='text/css' />
<script src="{{url('/')}}/public/fselect/jquery.tokenize.js"></script>

<script>

$(document).ready(function () {
    $(".subcategory").hide();
    $(".category >option").click(function () {
        $(".subcategory").show(2000);
    });
});

$(document).ready(function () {
    $(".service").hide();
    $(".subcategory  >option").click(function () {
        $(".service").show(2000);
    });
});
$(document).ready(function () {
    $(".product").hide();
    $(".service >option").click(function () {
        $(".product").show(2000);
    });
});



</script>

<!------------Fselect---Script------Start---from-Here----->
<script>
(function($) {

    $.fn.fSelect = function(options) {

        if (typeof options == 'string' ) {
            var settings = options;
        }
        else {
            var settings = $.extend({
                placeholder: 'Select some options',
                numDisplayed: 1,
                overflowText: '{n} selected',
                searchText: 'Search',
                showSearch: true
            }, options);
        }


        /**
         * Constructor
         */
        function fSelect(select, settings) {
            this.$select = $(select);
            this.settings = settings;
            this.create();
        }


        /**
         * Prototype class
         */
        fSelect.prototype = {
            create: function() {
                this.settings.multiple = this.$select.is('[multiple]');
                var multiple = this.settings.multiple ? ' multiple' : '';
                this.$select.wrap('<div class="fs-wrap' + multiple + '" tabindex="0"></div>');
                this.$select.before('<div class="fs-label-wrap"><div class="fs-label">' + this.settings.placeholder + '</div><span class="fs-arrow"></span></div>');
                this.$select.before('<div class="fs-dropdown hidden"><div class="fs-options"></div></div>');
                this.$select.addClass('hidden');
                this.$wrap = this.$select.closest('.fs-wrap');
                this.$wrap.data('id', window.fSelect.num_items);
                window.fSelect.num_items++;
                this.reload();
            },

            reload: function() {
                if (this.settings.showSearch) {
                    var search = '<div class="fs-search"><input type="search" placeholder="' + this.settings.searchText + '" /></div>';
                    this.$wrap.find('.fs-dropdown').prepend(search);
                }
                this.selected = [].concat(this.$select.val()); // force an array
                var choices = this.buildOptions(this.$select);
                this.$wrap.find('.fs-options').html(choices);
                this.reloadDropdownLabel();
            },

            destroy: function() {
                this.$wrap.find('.fs-label-wrap').remove();
                this.$wrap.find('.fs-dropdown').remove();
                this.$select.unwrap().removeClass('hidden');
            },

            buildOptions: function($element) {
                var $this = this;

                var choices = '';
                $element.children().each(function(i, el) {
                    var $el = $(el);

                    if ('optgroup' == $el.prop('nodeName').toLowerCase()) {
                        choices += '<div class="fs-optgroup">';
                        choices += '<div class="fs-optgroup-label">' + $el.prop('label') + '</div>';
                        choices += $this.buildOptions($el);
                        choices += '</div>';
                    }
                    else {
                        var val = $el.prop('value');

                        // exclude the first option in multi-select mode
                        if (0 < i || '' != val || ! $this.settings.multiple) {
                            var disabled = $el.is(':disabled') ? ' disabled' : '';
                            var selected = -1 < $.inArray(val, $this.selected) ? ' selected' : '';
                            choices += '<div class="fs-option' + selected + disabled + '" data-value="' + val + '"><span class="fs-checkbox"><i></i></span><div class="fs-option-label">' + $el.html() + '</div></div>';
                        }
                    }
                });

                return choices;
            },

            reloadDropdownLabel: function() {
                var settings = this.settings;
                var labelText = [];

                this.$wrap.find('.fs-option.selected').each(function(i, el) {
                    labelText.push($(el).find('.fs-option-label').text());
                });

                if (labelText.length < 1) {
                    labelText = settings.placeholder;
                }
                else if (labelText.length > settings.numDisplayed) {
                    labelText = settings.overflowText.replace('{n}', labelText.length);
                }
                else {
                    labelText = labelText.join(', ');
                }

                this.$wrap.find('.fs-label').html(labelText);
                this.$select.change();
            }
        }


        /**
         * Loop through each matching element
         */
        return this.each(function() {
            var data = $(this).data('fSelect');

            if (!data) {
                data = new fSelect(this, settings);
                $(this).data('fSelect', data);
            }

            if (typeof settings == 'string') {
                data[settings]();
            }
        });
    }


    /**
     * Events
     */
    window.fSelect = {
        'num_items': 0,
        'active_id': null,
        'active_el': null,
        'last_choice': null,
        'idx': -1
    };

    $(document).on('click', '.fs-option:not(.disabled)', function(e) {
        var $wrap = $(this).closest('.fs-wrap');
        var do_close = false;

        if ($wrap.hasClass('multiple')) {
            var selected = [];

            // shift + click support
            if (e.shiftKey && null != window.fSelect.last_choice) {
                var current_choice = parseInt($(this).attr('data-index'));
                var do_select = ! $(this).hasClass('selected');
                var min = Math.min(window.fSelect.last_choice, current_choice);
                var max = Math.max(window.fSelect.last_choice, current_choice);

                for (i = min; i <= max; i++) {
                    $wrap.find('.fs-option[data-index='+ i +']')
                        .not('.hidden, .disabled')
                        .each(function() {
                            do_select ?
                                $(this).addClass('selected') :
                                $(this).removeClass('selected');
                        });
                }
            }
            else {
                window.fSelect.last_choice = parseInt($(this).attr('data-index'));
                $(this).toggleClass('selected');
            }

            $wrap.find('.fs-option.selected').each(function(i, el) {
                selected.push($(el).attr('data-value'));
            });
        }
        else {
            var selected = $(this).attr('data-value');
            $wrap.find('.fs-option').removeClass('selected');
            $(this).addClass('selected');
            do_close = true;
        }

        $wrap.find('select').val(selected);
        $wrap.find('select').fSelect('reloadDropdownLabel');

        if (do_close) {
            closeDropdown($wrap);
        }
    });

    $(document).on('keyup', '.fs-search input', function(e) {
        if (40 == e.which) { // down
            $(this).blur();
            return;
        }

        var $wrap = $(this).closest('.fs-wrap');
        var matchOperators = /[|\\{}()[\]^$+*?.]/g;
        var keywords = $(this).val().replace(matchOperators, '\\$&');

        $wrap.find('.fs-option, .fs-optgroup-label').removeClass('hidden');

        if ('' != keywords) {
            $wrap.find('.fs-option').each(function() {
                var regex = new RegExp(keywords, 'gi');
                if (null === $(this).find('.fs-option-label').text().match(regex)) {
                    $(this).addClass('hidden');
                }
            });

            $wrap.find('.fs-optgroup-label').each(function() {
                var num_visible = $(this).closest('.fs-optgroup').find('.fs-option:not(.hidden)').length;
                if (num_visible < 1) {
                    $(this).addClass('hidden');
                }
            });
        }

        setIndexes($wrap);
    });

    $(document).on('click', function(e) {
        var $el = $(e.target);
        var $wrap = $el.closest('.fs-wrap');

        if (0 < $wrap.length) {

            // user clicked another fSelect box
            if ($wrap.data('id') !== window.fSelect.active_id) {
                closeDropdown();
            }

            // fSelect box was toggled
            if ($el.hasClass('fs-label') || $el.hasClass('fs-arrow')) {
                var is_hidden = $wrap.find('.fs-dropdown').hasClass('hidden');

                if (is_hidden) {
                    openDropdown($wrap);
                }
                else {
                    closeDropdown($wrap);
                }
            }
        }
        // clicked outside, close all fSelect boxes
        else {
            closeDropdown();
        }
    });

    $(document).on('keydown', function(e) {
        var $wrap = window.fSelect.active_el;
        var $target = $(e.target);

        // toggle the dropdown on space
        if ($target.hasClass('fs-wrap')) {
            if (32 == e.which) {
                $target.find('.fs-label').trigger('click');
                return;
            }
        }
        // preserve spaces during search
        else if (0 < $target.closest('.fs-search').length) {
            if (32 == e.which) {
                return;
            }
        }
        else if (null === $wrap) {
            return;
        }

        if (38 == e.which) { // up
            e.preventDefault();

            $wrap.find('.fs-option').removeClass('hl');

            if (window.fSelect.idx > 0) {
                window.fSelect.idx--;
                $wrap.find('.fs-option[data-index=' + window.fSelect.idx + ']').addClass('hl');
                setScroll($wrap);
            }
            else {
                window.fSelect.idx = -1;
                $wrap.find('.fs-search input').focus();
            }
        }
        else if (40 == e.which) { // down
            e.preventDefault();

            var last_index = $wrap.find('.fs-option:last').attr('data-index');
            if (window.fSelect.idx < parseInt(last_index)) {
                window.fSelect.idx++;
                $wrap.find('.fs-option').removeClass('hl');
                $wrap.find('.fs-option[data-index=' + window.fSelect.idx + ']').addClass('hl');
                setScroll($wrap);
            }
        }
        else if (32 == e.which || 13 == e.which) { // space, enter
            e.preventDefault();

            $wrap.find('.fs-option.hl').click();
        }
        else if (27 == e.which) { // esc
            closeDropdown($wrap);
        }
    });

    function setIndexes($wrap) {
        $wrap.find('.fs-option:not(.hidden,.disabled)').each(function(i, el) {
            $(el).attr('data-index', i);
            $wrap.find('.fs-option').removeClass('hl');
        });
        $wrap.find('.fs-search input').focus();
        window.fSelect.idx = -1;
    }

    function setScroll($wrap) {
        var $container = $wrap.find('.fs-options');
        var $selected = $wrap.find('.fs-option.hl');

        var itemMin = $selected.offset().top + $container.scrollTop();
        var itemMax = itemMin + $selected.outerHeight();
        var containerMin = $container.offset().top + $container.scrollTop();
        var containerMax = containerMin + $container.outerHeight();

        if (itemMax > containerMax) { // scroll down
            var to = $container.scrollTop() + itemMax - containerMax;
            $container.scrollTop(to);
        }
        else if (itemMin < containerMin) { // scroll up
            var to = $container.scrollTop() - containerMin - itemMin;
            $container.scrollTop(to);
        }
    }

    function openDropdown($wrap) {
        window.fSelect.active_el = $wrap;
        window.fSelect.active_id = $wrap.data('id');
        window.fSelect.initial_values = $wrap.find('select').val();
        $wrap.find('.fs-dropdown').removeClass('hidden');
        setIndexes($wrap);
    }

    function closeDropdown($wrap) {
        if ('undefined' == typeof $wrap && null != window.fSelect.active_el) {
            $wrap = window.fSelect.active_el;
        }
        if ('undefined' !== typeof $wrap) {
            // only trigger if the values have changed
            var initial_values = window.fSelect.initial_values;
            var current_values = $wrap.find('select').val();
            if (JSON.stringify(initial_values) != JSON.stringify(current_values)) {
                $(document).trigger('fs:changed', $wrap);
            }
        }

        $('.fs-dropdown').addClass('hidden');
        window.fSelect.active_el = null;
        window.fSelect.active_id = null;
        window.fSelect.last_choice = null;
    }

})(jQuery);

$ (document).ready (function () {
  $('.test').fSelect({forceCustomRendering:true});
});
</script>

//$(document).ready(function () {
//$(".service").show();
//if ($("select[name=subcategory]").val() == 0){
//$(".service").hide();
//$(".subcategory >option").click(function () {
//$(".service").show(1000);
//});
//}
//});


//    function myservice(subcategoryValue){
//    suncategory = subcategoryValue;
//    if (suncategory == 0){
//    $("select[name='service']").children().remove();
//    $("select[name='service']").prop('disabled', true);
//    $("select[name='service']").append("<option value='0'>Select Subcategory</option>");
//    @foreach($allsubcat as $subcategory)
//    }
//    else if (suncategory == {{$subcategory - > id}}){
//    $(".service").show();
//    $("select[name='service']").children().remove();
//    $("select[name='service']").prop('disabled', false);
//    @foreach($allservice as $service)
//            @if ($service - > subcategories_id == $subcategory - > id)
//            $("select[name='service']").append("<option value='{{ $service->id }}' >{{ $service->service_name}}</option>");
//    @endif
//            @endforeach
//            @endforeach
//    }
//    }
//
//    $(document).ready(function () {
//
//    $("select[name='service']").prop('disabled', true);
//    // category ager theke ekta load thake 
//    myservice($("select[name=subcategory]").val());
//    // category chanbge korle
//    $("select[name=subcategory]").change(function () {
//    myservice($(this).val());
//    });
//    });





<!------------Fselect---Script------End---from-Here----->




@endsection