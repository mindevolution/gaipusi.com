/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    $('#yw0 > li,#yw1 > li').each(function(){
		$(this).hover(
 
			// 显示菜单
			function(){
				$(this).find('ul:eq(0)').show();
			},
 
			// 隐藏菜单
			function(){
				$(this).find('ul:eq(0)').hide();
			}
 
		);
	});
});

