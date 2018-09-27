/* Cinese/CHI initialisation for the jQuery UI date picker plugin. */
/* Written by Stuart. */
jQuery(function($){
	$.datepicker.regional['chi'] = {
		closeText: '做',
		prevText: '上日',
		nextText: '下一頁',
		currentText: '今天',
		monthNames: ['一月','二月','三月','四月','五月','六月',
		'七月','八月','九月','十月','十一月','十二月'],
		monthNamesShort: ['一月','二月','三月','四月','五月','六月',
		'七月','八月','九月','十月','十一月','十二月'],
		dayNames: ['星期一', '星期二', '星期三', '星期四', '星期五', '星期六', '星期日'],
		dayNamesShort: ['星期一', '星期二', '星期三', '星期四', '星期五', '星期六', '星期日'],
		dayNamesMin: ['星期一','星期二','星期三','星期四','星期五','星期六','星期日'],
		weekHeader: 'Wk',
		dateFormat: 'yy/mm/dd',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''};
});
