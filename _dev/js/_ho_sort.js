if ($('.js-ho_sort') && $('.ho_sort_options_item')) {
  $('.js-ho_sort').on('click', ho_soi_toggle);
  $('.ho_sort_options_item').on('click', ho_soi_data);
}

function ho_soi_toggle() {
  $('.ho_sort_options').toggleClass('ho_sort_options-hide');
}

function ho_soi_data(){
  var _this = $(this);
  var srotType = _this.attr('data-note-sort');
  var  tempArr = [];
  if (srotType === 'alph-asc') {
      $('.note').find('.nh_title_text').each((i, val) => {
        tempArr.push([val.innerText,i]);
      });
      tempArr.sort();
      $('.note').each(i => {
        $('.note').eq(tempArr[i][1]).attr('style','order:' + i);
      });
  }
  if (srotType === 'alph-desc') {
    $('.note').find('.nh_title_text').each((i, val) => {
      tempArr.push([val.innerText,i]);
    });
    tempArr.sort().reverse();
    $('.note').each(i => {
      $('.note').eq(tempArr[i][1]).attr('style','order:' + i);
    });
  }
  if (srotType === 'date-added-asc') {
    $('.note').find('.nc_date_added > span').each((i, val) => {
      tempArr.push([val.innerText,i]);
    });
    tempArr.sort();
    $('.note').each(i => {
      $('.note').eq(tempArr[i][1]).attr('style','order:' + i);
    });
  }
  if (srotType === 'date-added-desc') {
    $('.note').find('.nc_date_added > span').each((i, val) => {
      tempArr.push([val.innerText,i]);
    });
    tempArr.sort().reverse();
    $('.note').each(i => {
      $('.note').eq(tempArr[i][1]).attr('style','order:' + i);
    });
  }
  if (srotType === 'date-mod-asc') {
    $('.note').find('.nc_date_updated > span').each((i, val) => {
      tempArr.push([val.innerText,i]);
    });
    tempArr.sort();
    $('.note').each(i => {
      $('.note').eq(tempArr[i][1]).attr('style','order:' + i);
    });
  }
  if (srotType === 'date-mod-desc') {
    $('.note').find('.nc_date_updated > span').each((i, val) => {
      tempArr.push([val.innerText,i]);
    });
    console.log(tempArr);
    tempArr.sort().reverse();
    $('.note').each(i => {
      $('.note').eq(tempArr[i][1]).attr('style','order:' + i);
    });
  }
}