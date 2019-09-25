<?php
include('./header.php');
?>
            <div class="mainbox">
                <div class="note">
                    <h4>後台管理系統說明</h4>
                    <ol>
                        <li>第一次使用本系統，請點擊左邊管理導航</li>
                        <li>管理功能導航中各項目都可以收縮和打開</li>
                        <li>本系統使用最新的HTML5特性和CSS3屬性</li>
                    </ol>
                </div>
                <div class="note">
                    <h4>開發信息</h4>
                    <ul class="note_list">
                        <li>製作團隊&emsp;&emsp;源碼時代 : 小鱷魚</li>
                        <li>聯繫方式&emsp;&emsp;QQ : 804050846&emsp;聯繫電話 : 1310000000</li>
                    </ul>
                </div>

                <div class="note">
                    <h4>新聞列表</h4>
                    <form method="post" action="" class="search_form">
                        <input type="text" name="keywords" placeholder="請輸入要搜索的關鍵字"/>
                        <input type="submit" value="搜索"/>
                    </form>
                    <table class="new_list">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <th>標題</th>
                                <th>摘要</th>
                                <th>日期</th>
                                <th>點擊率</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>今天發生大事</td>
                                <td>快訊:張三掉水溝</td>
                                <td>2017-1-1</td>
                                <td>666次</td>
                                <td>
                                    <a href="#">修改</a>
                                    <a href="#">刪除</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>今天發生大事</td>
                                <td>快訊:張三掉水溝</td>
                                <td>2017-1-1</td>
                                <td>666次</td>
                                <td>
                                    <a href="#">修改</a>
                                    <a href="#">刪除</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>今天發生大事</td>
                                <td>快訊:張三掉水溝</td>
                                <td>2017-1-1</td>
                                <td>666次</td>
                                <td>
                                    <a href="#">修改</a>
                                    <a href="#">刪除</a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>今天發生大事</td>
                                <td>快訊:張三掉水溝</td>
                                <td>2017-1-1</td>
                                <td>666次</td>
                                <td>
                                    <a href="#">修改</a>
                                    <a href="#">刪除</a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>今天發生大事</td>
                                <td>快訊:張三掉水溝</td>
                                <td>2017-1-1</td>
                                <td>666次</td>
                                <td>
                                    <a href="#">修改</a>
                                    <a href="#">刪除</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="page">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#" class="on">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                    </div>
                </div>

                <div class="note">
                    <h4>發表新聞</h4>
                    <form action="" method="post">
                        <table class="news_form">
                            <tr>
                                <td>新聞標題 : </td>
                                <td><label><input type="text" name="title" class="inbox"/></label></td>
                            </tr>
                            <tr>
                                <td>新聞分類 : </td>
                                <td>
                                    <label><select class="inbox">
                                        <option>請選擇分類</option>
                                        </select></label>
                                </td>
                            </tr>
                            <tr>
                                <td>作 者 : </td>
                                <td><label><input type="text" name="title" class="inbox"/></label></td>
                            </tr>
                            <tr>
                                <td>新聞內容 : </td>
                                <td><label><input type="text" name="title" class="inbox"/></label></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="送出"/></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
<?php
include('./footer.php');
?>