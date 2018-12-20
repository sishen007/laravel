<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
//use Illuminate\Repositories\UserRepository;

class ProfileComposer
{
//    /**
//     * 用户仓库实现.
//     *
//     * @var UserRepository
//     */
//    protected $users;
//
//    /**
//     * 创建一个新的属性composer.
//     *
//     * @param UserRepository $users
//     * @return void
//     */
//    public function __construct(UserRepository $users)
//    {
//        // 依赖注入通过服务容器自动解析...
//        $this->users = $users;
//    }

    /**
     * 绑定数据到视图.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
//        $view->with('count', $this->users->count());
        $view->with('testss','aaaaa');
    }
}