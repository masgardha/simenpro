<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Utility\Text;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public const NOT_ACTIVE = 0;
    public const ACTIVE = 1;

    /**
     * Registration account
     *
     * @return \Cake\Http\Response|null
     */
    public function registration()
    {
        $userTable = TableRegistry::getTableLocator()->get('Users');
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $param = $this->request->getData();
            $user->name = $param['name'];
            $user->email = $param['email'];
            $user->password = password_hash($param['password'], PASSWORD_DEFAULT);
            $user->verified = self::NOT_ACTIVE;
            $user->token = Text::uuid();
            if ($userTable->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'registration']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Forget password
     */
    public function forget()
    {
        $userTable = TableRegistry::getTableLocator()->get('Users');
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $param = $this->request->getData();
            $QueryUser = $userTable->find()
                ->where([
                    'email' => $param['email']
                ])->first();
            if (!empty($QueryUser)) {
                $QueryUser->password = password_hash($param['Password_Baru'], PASSWORD_DEFAULT);
                $userTable->save($QueryUser);
                $this->Flash->success(__('Password berhasil diganti'));
                return $this->redirect(['action' => 'login']);
            }
            else {
                $this->Flash->error(__('Ganti password gagal'));
            }
        }
        $this->set(compact('user'));
    }

    /**
     * Login user.
     *
     */
    public function login()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $userTable = TableRegistry::getTableLocator()->get('Users');
            $param = $this->request->getData();
            // get user id
            $QueryUser = $userTable->find('all')
                ->where([
                    'email' => $param['email'],
                    'verified' => self::ACTIVE
                ])->first();


           if(!empty($QueryUser) && password_verify($param['password'], $QueryUser->password)) {
               $this->Flash->success(__('Login Sukses'));
           }
           else {
               $this->Flash->error(__('Login Gagal'));
           }


        }
        $this->set(compact('user'));
    }

    /**
     * View method
     *
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Stores'],
        ]);

        $this->set(compact('user'));
    }
}
