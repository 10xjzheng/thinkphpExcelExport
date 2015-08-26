# thinkphpExcelExport
基于thinkphp+phpExcel的Excel导出demo，封装好了导出函数，可直接调用，sql脚本demo.sql在文件夹内。

###使用方式：

1.下载phpExcel包放到Vendor文件夹

2.调用函数（函数位于common/function.php）

/**
 * Excel导出
 * @param data 导出数据
 * @param title 表格的字段名 字段长度有限制，一般都够用，可以改变 $length1和$length2来增长
 * @param subject 表格主题 命名为主题+导出日期
 * 
 */

function exportExcel($data,$title,$subject)
