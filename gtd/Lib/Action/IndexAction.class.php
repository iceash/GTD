<?php
class IndexAction extends Action {
    public function index(){
    	$active[0] = "active";
    	$this->assign("active",$active);
        $all_material = M("material")->select();
        foreach ($all_material as $ma) {
            switch ($ma["type"] + 0) {
                case 0:
                    $basket[] = $ma;
                    break;
                case 1:
                    break;
                case 2:
                    $reference[] = $ma;
                    break;
                case 3:
                    $memo[] = $ma;
                    break;
                default:
                    break;
            }
        }
        $all_project = M("project")->select();
        $all_plan = M("plan")->select();
        foreach ($all_plan as $pl) {
            switch ($pl["plan_type"]) {
                case 'day':
                    $day_plan[] = $pl;
                    break;
                case 'week':
                    $week_plan[] = $pl;
                    break;
                case 'month':
                    $month_plan[] = $pl;
                    break;
                case 'year':
                    $year_plan[] = $pl;
                    break;
                default:
                    break;
            }
        }
        $arr["basket"] = $basket;
        $arr["reference"] = $reference;
        $arr["memo"] = $memo;
        $arr["project"] = $all_project;
        $arr["day_plan"] = $day_plan;
        $arr["week_plan"] = $week_plan;
        $arr["month_plan"] = $month_plan;
        $arr["year_plan"] = $year_plan;
        $this->assign($arr);
		$this->show();
    }
    public function calendar(){
    	$active[0] = "active";
    	$this->assign("active",$active);
        // 日历
        $all_day_plan = M("plan")->where("plan_type='day'")->select();
        $this->assign("day_plans",$all_day_plan);
        $all_week_plan = M("plan")->where("plan_type='week'")->select();
        $this->assign("week_plans",$all_week_plan);
        $all_month_plan = M("plan")->where("plan_type='month'")->select();
        $this->assign("month_plans",$all_month_plan);
        $all_year_plan = M("plan")->where("plan_type='year'")->select();
        $this->assign("year_plans",$all_year_plan);
		$this->show();
    }
    public function basket(){
        // 工作篮
        $active[1] = "active";
        $this->assign("active",$active);
        $materials = M("material")->where('type=0')->order("id DESC")->select();
        $this->assign("materials",$materials);
        $this->show();
    }
    public function add_material(){
        // 新建材料
        $active[1] = "active";
        $this->assign("active",$active);
        $this->show();
    }
    public function add_material_post(){
        $data["content"] = $_POST["content"];
        $back = M("material")->add($data);
        $this->redirect('Index/basket');
    }
    public function change_material(){
        // 修改材料
        $active[1] = "active";
        $this->assign("active",$active);
        $id = $_GET["id"];
        $redirect = $_GET["redirect"];
        $this->assign("redirect",$redirect);
        $material = M("material")->where("id=$id")->find();
        // dump($material);
        $this->assign("material",$material);
        $this->show();
    }
    public function change_material_post(){
        $data["content"] = $_POST["content"];
        $id = $_POST["id"];
        $redirect = $_POST["redirect"];
        $back = M("material")->where("id=$id")->save($data);
        $this->redirect('Index/'.$redirect);
    }
    public function delete_material_post(){
        $id = $_GET["id"];
        $redirect = $_GET["redirect"];
        $back = M("material")->where("id=$id")->delete();
        if ($back) {
            $this->redirect('Index/'.$redirect);
        }
    }
    public function project(){
        // 项目列表
        $active[2] = "active";
        $this->assign("active",$active);
        $projects = M("project")->select();
        $this->assign("projects",$projects);
        $this->show();
    }
    public function add_project(){
        // 新建项目
        $active[2] = "active";
        $this->assign("active",$active);
        $material_id = $_GET["id"];
        $this->assign("material_id",$material_id);
        $material = M("material")->where("id=$material_id")->find();
        $this->assign("material",$material);
        $this->show();
    }
    public function add_project_post(){
        $material_id = $_POST["material_id"];
        $data = $_POST;
        $back = M("project")->add($data);
        if ($back) {
            M("material")->where("id=$material_id")->setField("type",1);
        }
        $this->redirect('Index/project');
    }
    public function change_project(){
        // 修改项目
        $active[2] = "active";
        $this->assign("active",$active);
        $id = $_GET["id"];
        $project = M("project")->where("id=$id")->find();
        $this->assign("project",$project);
        $this->show();
    }
    public function change_project_post(){
        $id = $_POST["id"];
        $data = $_POST;
        M("project")->where("id=$id")->save($data);
        $this->redirect("Index/project");
    }
    public function add_memo(){
        // 材料移植备忘录
        $id = $_GET["id"];
        M("material")->where("id=$id")->setField("type",3);
        $this->redirect('Index/memo');
    }
    public function memo(){
        // 备忘录
        $active[3] = "active";
        $this->assign("active",$active);
        $materials = M("material")->where('type=3')->order("id DESC")->select();
        $this->assign("materials",$materials);
        $this->show();
    }
    public function add_reference(){
        // 材料移植备忘录
        $id = $_GET["id"];
        M("material")->where("id=$id")->setField("type",2);
        $this->redirect('Index/reference');
    }
    public function reference(){
        // 参考资料
        $active[4] = "active";
        $this->assign("active",$active);
        $materials = M("material")->where('type=2')->order("id DESC")->select();
        $this->assign("materials",$materials);
        $this->show();
    }
    public function add_day_plan(){
        // 生成日程
        $active[2] = "active";
        $this->assign("active",$active);
        $project_id = $_GET["project_id"];
        $this->assign("project_id",$project_id);
        $project = M("project")->where("id=$project_id")->find();
        $this->assign("content",$project["content"]);
        $this->show();
    }
    public function add_plan_post(){
        $data = $_POST;
        if ($_POST["start_time"] == "") {
            $this->error("时间缺失");
        }
        M("plan")->add($data);
        $this->redirect('Index/calendar');
    }
    public function add_week_plan(){
        // 生成周计划
        $active[2] = "active";
        $this->assign("active",$active);
        $project_id = $_GET["project_id"];
        $this->assign("project_id",$project_id);
        $project = M("project")->where("id=$project_id")->find();
        $this->assign("content",$project["content"]);
        $this->show();
    }
    public function add_month_plan(){
        // 生成月计划
        $active[2] = "active";
        $this->assign("active",$active);
        $project_id = $_GET["project_id"];
        $this->assign("project_id",$project_id);
        $project = M("project")->where("id=$project_id")->find();
        $this->assign("content",$project["content"]);
        $this->show();
    }
    public function add_year_plan(){
        // 生成年计划
        $active[2] = "active";
        $this->assign("active",$active);
        $project_id = $_GET["project_id"];
        $this->assign("project_id",$project_id);
        $project = M("project")->where("id=$project_id")->find();
        $this->assign("content",$project["content"]);
        $this->show();
    }
    public function change_day_plan(){
        // 修改日程
        $active[2] = "active";
        $this->assign("active",$active);
        $id = $_GET["id"];
        $plan = M("plan")->where("id=$id")->find();
        $this->assign("plan",$plan);
        $this->show();
    }
    public function change_week_plan(){
        // 修改周计划
        $active[2] = "active";
        $this->assign("active",$active);
        $id = $_GET["id"];
        $plan = M("plan")->where("id=$id")->find();
        $this->assign("plan",$plan);
        $this->show();
    }
    public function change_month_plan(){
        // 修改月计划
        $active[2] = "active";
        $this->assign("active",$active);
        $id = $_GET["id"];
        $plan = M("plan")->where("id=$id")->find();
        $this->assign("plan",$plan);
        $this->show();
    }
    public function change_year_plan(){
        // 修改年计划
        $active[2] = "active";
        $this->assign("active",$active);
        $id = $_GET["id"];
        $plan = M("plan")->where("id=$id")->find();
        $this->assign("plan",$plan);
        $this->show();
    }
    public function change_plan_post(){
        $data = $_POST;
        if ($_POST["start_time"] == "") {
            $this->error("时间缺失");
        }
        $id=$_POST["id"];
        M("plan")->where("id=$id")->save($data);
        $this->redirect('Index/calendar');

    }
}