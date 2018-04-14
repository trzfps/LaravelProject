<?php
    namespace App̣\Services;

    use App\Repositories\UserRepository;
    use App\Validators\UserValidator;

    class Userservice{
       private $repository;
       private $validator;



        public function __construct(UserRepository $repository, UserValidator $validator){
            $this->repository = $repository;
            $this->validator = $validator;

        }
        public function store($data){
            try{
                $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);
                $usuario = $this->repository->create($data);

                
                return [
                    'sucess' => true,
                    'message' => "Usuário Cadastrado",
                    'data' => $usuario,
                 ];


            }
            catch(\Exception $e){
                return [
                   'sucess' => false,
                   'message' => "Erro de execução", 
                ];
            }
        }
        public function update(){
            
        }
        public function delete(){
            
        }
    }





?>