    /**
     * @author Santos L. Victor <victorluissantos@live.com>
     * @see Function to shortable a name
     * @param [String] $name, name or string that need shortable
     * @param [Int] $limit, name or string that need shortable
     * @param [Array] $data, name or string that need shortable
     * @return [String] $nome_r
     */
    public function autoShortName($name = null, $limit = 20, $data = array()) {

        if (empty($data))
        {
            $arr = explode(' ', $name);
            $data = array();
            foreach ($arr as $k => $i) {
                $data[] = array(
                    'n' => $i,
                    'p' => $k,
                    'l' => strlen($i)
                );
            }

            if ((($k+1)*3) > $limit) {
                $nome = substr($name, 0, $limit-1);
                if (substr($nome, -1)==' ')
                    return substr($nome, 0, strlen($nome)-1);
                else
                    return $nome.'.';
            }

            $tam = array_column($data, 'l');
            array_multisort($tam, SORT_ASC, $data);
        }

        $nome_r = '';
        $croped = false;
        foreach ($data as $key => $row) {
            if (!$croped && strpos($row['n'],'.')==false)
            {
                $data[$key]['n'] = $data[$key]['n'][0].'.';
                $croped = true;
            }
            else
            {
                $data[$key]['n'] = $data[$key]['n'];
            }
        }

        foreach ($data as $key => $row) {
            $nome_r .= $row['n']. ($key < count($data) - 1 ? ' ' : '');
        }

        if (strlen($nome_r) > $limit)
        {
            return $this->autoShortName($nome_r, $limit, $data);
        }
        else
        {
            $nome_r = '';
            $tam = array_column($data, 'p');
            array_multisort($tam, SORT_ASC, $data);

            foreach ($data as $key => $row) {
                $nome_r .= $row['n'] . ($key < count($data) - 1 ? ' ' : '');
            }

            return $nome_r;
        }
    }
