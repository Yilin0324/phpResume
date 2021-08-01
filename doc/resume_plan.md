## 履歷內容說明

1. 作品集計畫 - 計畫後續會放入一些個人作品，如：線上萬年曆、小遊戲、時鐘、泰山飯店、Logo設計...等作品放入作品集。

2. 視覺計畫 - 以極簡的風格，配色以黑色和黃色為主調，放入所需的文字與照片，來呈現整齊乾淨的頁面。

3. 資料庫規劃 - 後台功能建立的資料表:

    * hero - 主頁

    | name     |  type  |  pk | default | A_I |   note   |
    |:----:    |:------:|:---:|:-------:|:---:|:--------:|
    |id        |int(5)  | yes |         | yes | 流水號    |
    |img       |text    |     |         |     | 檔名/路徑 |
    |subject   |text    |     |         |     | 標題      |
    |title     |text    |     |         |     | 次標題    |
    |text      |text    |     |         |     | 文字      |
    |sh        |int(1)  |     |   1     |     | 顯示      |

    * image - 個人簡介履歷照片

    | name     |  type  |  pk | default | A_I |   note   |
    |:----:    |:------:|:---:|:-------:|:---:|:--------:|
    |id        |int(5)  | yes |         | yes | 流水號    |
    |img       |text    |     |         |     | 檔名/路徑 |
    |text      |text    |     |         |     | 文字      |
    |sh        |int(1)  |     |   1     |     | 顯示      |

    * job - 求職目標&條件

    | name     |  type  |  pk | default | A_I |   note   |
    |:----:    |:------:|:---:|:-------:|:---:|:--------:|
    |id        |int(5)  | yes |         | yes | 流水號    |
    |text      |text    |     |         |     | 文字      |
    |sh        |int(1)  |     |   1     |     | 顯示      |

    * personal - 基本資料

    | name     |  type  |  pk | default | A_I |   note   |
    |:----:    |:------:|:---:|:-------:|:---:|:--------:|
    |id        |int(5)  | yes |         | yes | 流水號    |
    |text      |text    |     |         |     | 文字      |
    |sh        |int(1)  |     |   1     |     | 顯示      |

    * experience - 經歷

    | name     |  type  |  pk | default | A_I |   note   |
    |:----:    |:------:|:---:|:-------:|:---:|:--------:|
    |id        |int(5)  | yes |         | yes | 流水號    |
    |title     |text    |     |         |     | 標題      |
    |dwork     |text    |     |         |     | 工作時間  |
    |text      |text    |     |         |     | 工作內容  |
    |sh        |int(1)  |     |   1     |     | 顯示      |

    * education - 學歷

    | name     |  type  |  pk | default | A_I |   note   |
    |:----:    |:------:|:---:|:-------:|:---:|:--------:|
    |id        |int(5)  | yes |         | yes | 流水號    |
    |title     |text    |     |         |     | 標題      |
    |dwork     |text    |     |         |     | 工作時間  |
    |text      |text    |     |         |     | 工作內容  |
    |sh        |int(1)  |     |   1     |     | 顯示      |

    * skills - 技能

    | name     |  type  |  pk | default | A_I |   note   |
    |:----:    |:------:|:---:|:-------:|:---:|:--------:|
    |id        |int(5)  | yes |         | yes | 流水號    |
    |subject   |text    |     |         |     | 標題      |
    |text      |text    |     |         |     | 文字      |
    |sh        |int(1)  |     |   1     |     | 顯示      |

    * portfolio - 作品集

    | name     |  type  |  pk | default | A_I |   note   |
    |:----:    |:------:|:---:|:-------:|:---:|:--------:|
    |id        |int(5)  | yes |         | yes | 流水號    |
    |img       |text    |     |         |     | 檔名/路徑 |
    |href      |text    |     |         |     | 連結      |
    |subject   |text    |     |         |     | 標題      |
    |text      |text    |     |         |     | 文字      |
    |sh        |int(1)  |     |   1     |     | 顯示      |

    * biography - 自傳

    | name     |  type  |  pk | default | A_I |   note   |
    |:----:    |:------:|:---:|:-------:|:---:|:--------:|
    |id        |int(5)  | yes |         | yes | 流水號    |
    |text      |text    |     |         |     | 文字      |
    |sh        |int(1)  |     |   1     |     | 顯示      |

    * admin -  帳號密碼

    | name     |  type  |  pk | default | A_I |   note   |
    |:----:    |:------:|:---:|:-------:|:---:|:--------:|
    |id        |int(5)  |yes  |         |yes  | 流水號    |
    |acc       |text    |     |         |     | 帳  號    |
    |pw        |text    |     |         |     | 密  碼    |

4. 功能規劃 - 個人資料管理會以表單的方式來呈現，讓使用者可以填入資料後儲存到資料庫。


