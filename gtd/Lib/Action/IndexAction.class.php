<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	$active[0] = "active";
    	$this->assign("active",$active);
		$this->show();
    }
    public function calendar(){
    	$active[0] = "active";
    	$this->assign("active",$active);
		$this->show();
    }
    public function basket(){
        // 工作篮
        $active[1] = "active";
        $this->assign("active",$active);
        $this->show();
    }
    public function add_material(){
        // 新建材料
        $active[1] = "active";
        $this->assign("active",$active);
        $this->show();
    }
    public function add_material_post(){
        $this->redirect('Index/basket');
    }
    public function change_material(){
        // 修改材料
        $active[1] = "active";
        $this->assign("active",$active);
        $this->show();
    }
    public function project(){
        // 项目列表
        $active[2] = "active";
        $this->assign("active",$active);
        $this->show();
    }
    public function add_project(){
        // 新建项目
        $active[2] = "active";
        $this->assign("active",$active);
        $this->show();
    }
    public function add_project_post(){
        $this->redirect('Index/project');
    }
    public function change_project(){
        // 修改项目
        $active[2] = "active";
        $this->assign("active",$active);
        $this->show();
    }
    public function add_memo(){
        // 材料移植备忘录
        $this->redirect('Index/memo');
    }
    public function memo(){
        // 备忘录
        $active[3] = "active";
        $this->assign("active",$active);
        $this->show();
    }
    public function add_reference(){
        // 材料移植备忘录
        $this->redirect('Index/reference');
    }
    public function reference(){
        // 参考资料
        $active[4] = "active";
        $this->assign("active",$active);
        $this->show();
    }
    public function add_day_plan(){
        // 生成日程
        $active[2] = "active";
        $this->assign("active",$active);
        $this->show();
    }
    public function add_plan_post(){
        $this->redirect('Index/project');
    }
    public function add_week_plan(){
        // 生成周计划
        $active[2] = "active";
        $this->assign("active",$active);
        $this->show();
    }
    public function add_month_plan(){
        // 生成月计划
        $active[2] = "active";
        $this->assign("active",$active);
        $this->show();
    }
    public function add_year_plan(){
        // 生成年计划
        $active[2] = "active";
        $this->assign("active",$active);
        $this->show();
    }
}