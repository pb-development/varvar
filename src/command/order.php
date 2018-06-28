<?php
namespace varvar\command;

/**
 * サジェスト
 */
Class order {


    /**
     * @var
     */
    public $option;


    /**
     * @var
     */
    public $result;


    /**
     * order constructor.
     */
    public function __construct() {

    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $option
     * @return order
     */
    public function setOption($option)
    {
        $this->option = $option;
        return $this;
    }

    /**
     *
     */
    public function generate() {

        // dummy
        sleep(1);

        if ($this->option[2] == "-cn") {
            $this->result = "# NOUN result output outcome end ret\n";
        }

        if ($this->option[2] == "-cnw") {

            $this->result = "
# NOUN result output end ret outcome

result: 結果、汎用的に使えるのでとりあえず結果といえばこれ
output: この値がどこかにアウトプットされる時、何かのアウトプットになっている時に使うと良い
end: 最終結果、単体では意味がはっきりしないので、他の単語と組み合わせて使うと良い
ret: returnの略、最終的に呼び出し元に返却される時に使うと良い
outcome: 結果、あまり使わないけど他の選択肢がない時に使うと良い\n";
        }

        if ($this->option[2] == "-fs") {
            $this->result = "# FUNCTION gatherInformation collectInformation getInformation\n";
        }

        if ($this->option[2] == "-fsw") {
            $this->result = "
# FUNCTION gatherInformation collectInformation getInformation

gather: 散らばった複数のものをがさっと集める感じ、とりあえず集める時に使うと良い
collect: 複数のものを整理しながら集める感じ、集める対象が決まっていて綺麗に集める時に使うと良い
information: 情報、広く使えるので◯◯の情報と名前がつけられない時にとりあえず使うと良い\n";
        }
    }
}