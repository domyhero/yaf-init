<?php
/**
 * @name SampleModel
 * @desc sample数据获取类, 可以访问数据库，文件，其它系统等
 * @author bool
 */
class UserModel extends BaseModel{
    
    // 插入数据示例
    public function insert() {
		
		return $this->db->insert('user', [
		    'name' => 'boolsss',
		    'age' => 20,
		    'sex' => "['en', 'fr', 'jp', 'cn']"
		]);

    }
}
